<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\App;
use core\RoleUtils;
use core\Utils;
use core\Validator;
use Exception;

class LoginController
{
    public function __construct()
    {
    }

    /**
     * @throws Exception
     */
    public function validate(): bool
    {
        $validator = new Validator();
        $email = $validator->validateFromPost("email", ["required" => true, "required_message" => "Musisz podac email uzytkownika!"]);
        $password = $validator->validateFromPost("password", ["required" => true, "required_message" => "Musisz podac haslo!"]);

        if (!App::getMessages()->isEmpty()) {
            App::getRouter()->forwardTo("login");
        }

        $result = App::getDB()->select("User", ["password", "id", "is_active"], ["email" => $email]);

        if (empty($result)) {
            Utils::addErrorMessage("Niepoprawny login lub hasło!");
            return false;
        }

        $userDbData = $result[0];

        if ($userDbData["is_active"] == "false") {
            Utils::addErrorMessage("Niepoprawny login lub hasło!");
            return false;
        }

        $userId = intval($userDbData["id"] ?? throw new Exception("Missing user id in DB!"));
        $hashedPass = hash("sha256", $password);
        $dbPass = $userDbData["password"] ?? throw new Exception("Missing password in DB!");

        if ($hashedPass != $dbPass) {
            Utils::addErrorMessage("Niepoprawny login lub hasło!");
            return false;
        }

        $roles = App::getDB()->select("Privilege", ["[><]Role" => ["Privilege.role_id" => "id"]],
            ["Role.name (role_name)"],
            ["user_id" => $userId]);

        if (empty($roles))
            throw new Exception("No roles for user " . $userId);

        foreach ($roles as $role) {
            RoleUtils::addRole($role["role_name"] ?? throw new Exception("Missing role name!"));
        }

        $_SESSION["_user_id"] = serialize($userId);

        return true;
    }

    public function action_verify(): void
    {
        try {
            if ($this->validate()) {
                App::getRouter()->redirectTo("home");
            } else {
                App::getRouter()->forwardTo("login");
            }
        } catch (Exception $e) {
            App::getRouter()->forwardTo("login");
            Utils::addErrorMessage($e->getMessage());
        }
    }

    public function verify(string $email, string $password): void
    {

    }

    /**
     * @throws \SmartyException
     */
    public function action_login(): void
    {
        if (App::getConf()->is_logged)
            App::getRouter()->redirectTo('home');

        App::getSmarty()->display("Login.tpl");
    }

    public function action_logout(): void
    {
        session_destroy();
        App::getRouter()->redirectTo('home');
    }

}