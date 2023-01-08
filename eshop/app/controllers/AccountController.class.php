<?php

namespace app\controllers;

use app\models\User;
use core\App;
use core\Utils;
use core\Validator;

class AccountController
{
    private User $userData;

    /**
     * @throws \Exception
     */
    private function loadData(): void
    {
        $id = unserialize($_SESSION["_user_id"]);
        $result = App::getDB()->select("User", "*", ["id" => $id]);
        if (empty($result))
            throw new \Exception("No user found!");

        $dbData = $result[0];

        $this->userData->setId($id);
        $this->userData->setEmail($dbData["email"]);
        $this->userData->setCity($dbData["city"] ?? "");
        $this->userData->setStreet($dbData["street"] ?? "");
        $this->userData->setPostalCode($dbData["postal_code"] ?? "");
    }

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->userData = new User();
        $this->loadData();
    }

    private function updateRow(string $columnName, string $data): void
    {
        $userId = $this->userData->getId();
        App::getDB()->update("User", [$columnName => $data], ["id" => $userId]);
    }

    /**
     * @throws \SmartyException
     */
    public function action_account(): void
    {
        App::getSmarty()->assign("user", $this->userData);
        App::getSmarty()->display("Account.tpl");
    }

    public function action_updateAccount(): void
    {
        $validator = new Validator();
        $password = $validator->validateFromPost("password", ["trim" => true, "min_length" => 1]);
        $city = $validator->validateFromPost("city", ["trim" => true]);
        $street = $validator->validateFromPost("address", ["trim" => true]);
        $postal = $validator->validateFromPost("postal", ["trim" => true, "regexp" => '/\d{2}-\d{3}/i']);

        if (App::getMessages()->getNumberOfErrors() > 0)
            App::getRouter()->forwardTo("account");

        if (isset($password) && !empty($password))
            $this->updateRow("password", $password);

        if (isset($city) && !empty($city))
            $this->updateRow("city", $city);

        if (isset($street) && !empty($street))
            $this->updateRow("street", $street);

        if (isset($postal) && !empty($postal))
            $this->updateRow("postal_code", $postal);

        App::getRouter()->forwardTo("account");
    }

}