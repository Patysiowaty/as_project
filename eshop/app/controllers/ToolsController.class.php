<?php

namespace app\controllers;

use app\models\Product;
use app\models\User;
use core\App;
use core\Validator;

class ToolsController
{
    private array $users = array();
    private int $userId;
    private array $roles = array();

    public function __construct()
    {
        $this->loadRoles();
        $this->userId = unserialize($_SESSION["_user_id"]);
    }

    /**
     * @throws \SmartyException
     */
    public function action_tools(): void
    {
        $this->loadUsers();
        App::getSmarty()->assign("users", $this->users);
        App::getSmarty()->assign("roles", $this->roles);
        App::getSmarty()->display("Tools.tpl");
    }

    /**
     * @throws \SmartyException
     */
    public function action_search(): void
    {
        $validator = new Validator();
        $username = $validator->validateFromPost("email", ["trim" => true, "required" => true, "required_message" => "Musisz podać przynajmniej jeden znak!"]);
        if (!App::getMessages()->isEmpty())
            App::getRouter()->forwardTo("tools");

        if (empty($username) || $username == "")
            App::getRouter()->redirectTo("tools");

        $result = App::getDB()->select("User", ["id", "email", "is_active"], ["email[~]" => $username]);

        foreach ($result as $item) {
            $this->users[] = $this->createUser($item);
        }

        $this->assignRoles();

        App::getSmarty()->assign("users", $this->users);
        App::getSmarty()->assign("roles", $this->roles);
        App::getSmarty()->display("Tools.tpl");
    }

    public function action_changeRole(): void
    {
        $this->loadUsers();
        $validator = new Validator();
        $role = $validator->validateFromPost("role", ["required" => true, "int" => true]);
        $userId = $validator->validateFromPost("id", ["required" => true, "int" => true]);
        $enable = $validator->validateFromPost("enable", ["required" => true]);

        if (!App::getMessages()->isEmpty())
            return;

        $found = null;
        foreach ($this->users as $user) {
            if ($user->getId() == $userId)
                $found = $user;
        }

        if (!isset($found))
            return;

        $result = App::getDB()->select("Role", ["name"], ["id" => $role]);
        if (empty($result))
            return;

        $roleName = $result[0]["name"];

        if ($enable == "false") {
            if (!$found->isInRole($roleName))
                return;
            App::getDB()->delete("Privilege", ["user_id" => $userId, "role_id" => $role]);
        } else if ($enable == "true") {
            if ($found->isInRole($roleName))
                return;
            App::getDB()->insert("Privilege", ["user_id" => $userId, "role_id" => $role]);
        } else {
            return;
        }
        $this->saveModificationAuthor($userId);
    }

    public function action_changeActivity(): void
    {
        $this->loadUsers();
        $validator = new Validator();
        $userId = $validator->validateFromPost("id", ["required" => true, "int" => true]);
        $active = $validator->validateFromPost("active", ["required" => true]);

        if (!App::getMessages()->isEmpty())
            return;

        $state = $active === "true";

        foreach ($this->users as $user) {
            if ($user->getId() == $userId)
                if ($user->isActive() == $state)
                    return;
        }

        App::getDB()->update("User", ["is_active" => $state], ["id" => $userId]);
        $this->saveModificationAuthor($userId);
    }

    private function createUser(array $data): User
    {
        $user = new User();
        $user->setId($data["id"]);
        $user->setEmail($data["email"]);
        $user->setIsActive($data["is_active"]);
        return $user;
    }

    private function assignRoles(): void
    {
        foreach ($this->users as $user) {
            $roles = App::getDB()->select("Privilege", ["[><]Role" => ["Privilege.role_id" => "id"]],
                ["Role.name"], ["user_id" => $user->getId()]);

            foreach ($roles as $item) {
                $user->addRole($item["name"]);
            }
        }
    }

    private function loadUsers(): void
    {
        $result = App::getDB()->select("User", ["id", "email", "is_active"]);

        foreach ($result as $item) {
            $this->users[] = $this->createUser($item);
        }

        $this->assignRoles();

    }

    private function loadRoles(): void
    {
        $result = App::getDB()->select("Role", ["name"]);

        foreach ($result as $item) {
            $this->roles[] = $item["name"];
        }
    }

    private function saveModificationAuthor(int $modifiedUser): void
    {
        App::getDB()->insert("UserModificationHistory", ["modified_user_id" => $modifiedUser,
            "modified_user_by" => $this->userId]);
    }

}