<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\Utils;
use core\Validator;
use Exception;

class RegistrationController
{
    private static int $userRoleId = 3;

    /**
     * @throws Exception
     */
    public function action_registration(): void
    {
        if (App::getConf()->is_logged)
            App::getRouter()->redirectTo("home");

        $validator = new Validator();
        $email = $validator->validateFromPost("email", ["trim" => true,
            "regexp" => "/[0-9A-z]+@[0-9A-z]+.[a-z]+/i", "required" => true, "validator_message" => "Niepoprawny format adresu email!"]);
        $password = $validator->validateFromPost("password", ["min_length" => 3, "required" => true,
            "required_message" => "Musisz podać haslo!", "validator_message" => "Haslo powinno skladac sie z przynajmniej 3 znaków!"]);

        if (!App::getMessages()->isEmpty())
            App::getRouter()->forwardTo("register");

        $result = App::getDB()->select("User", ["id"], ["email" => $email]);

        if (!empty($result)) {
            Utils::addErrorMessage("Email address is already in use.");
            App::getRouter()->forwardTo("register");
        }

        $hashedPassword = hash("sha256", $password);

        App::getDB()->insert("User", ["email" => $email, "password" => $hashedPassword]);
        $userId = App::getDB()->id();

        App::getDB()->insert("Privilege", ["user_id" => $userId, "role_id" => RegistrationController::$userRoleId]);

        $roles = App::getDB()->select("Privilege", ["[><]Role" => ["Privilege.role_id" => "id"]],
            ["Role.name (role_name)"],
            ["user_id" => $userId]);

        foreach ($roles as $role) {
            RoleUtils::addRole($role["role_name"] ?? throw new Exception("Missing role name!"));
        }

        $_SESSION["_user_id"] = serialize($userId);

        App::getRouter()->redirectTo("home");
    }

    /**
     * @throws \SmartyException
     */
    public function action_register(): void
    {
        if (App::getConf()->is_logged)
            App::getRouter()->redirectTo("home");

        App::getSmarty()->display("Register.tpl");
    }
}