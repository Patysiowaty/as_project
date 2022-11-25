<?php

namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\User;
use http\Exception\RuntimeException;

class LoginController
{
    private LoginForm $form;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    private function getParams(): void
    {
        $login = getFromRequest("login");
        $pass = getFromRequest("password");

        if (!isset($login) || !isset($pass)) {
            throw new RuntimeException("Expected login and password!");
        }

        $this->form->setLogin($login);
        $this->form->setPassword($pass);
    }

    private function validate(): bool
    {
        if (getMessages()->hasErrors())
            return false;

        if ($this->form->getLogin() == "admin" && $this->form->getPassword() == "admin") {
            addRole('admin');
        } else if ($this->form->getLogin() == "user" && $this->form->getPassword() == "user") {
            addRole('user');
        } else {
            getMessages()->addError('Incorrect credentials!');
            return false;
        }

        return true;
    }

    public function render(): void
    {
        getSmarty()->assign('form',$this->form); // dane formularza do widoku
        getSmarty()->display('LoginView.tpl');
    }

    public function action_login(): void
    {
        try {
            $this->getParams();
        } catch (\Exception $e) {
            getMessages()->pushError("Failed while getting credentials!");
            return;
        }

        if ($this->validate()) {
            redirectTo("personList");
        } else {
            $this->render();
        }
    }

    public function action_logout(): void
    {
        session_destroy();

        getMessages()->pushInfo("Successfully logout!");
        $this->render();
    }

}