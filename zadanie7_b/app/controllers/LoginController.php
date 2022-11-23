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
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $user = new User($this->form->getLogin(), 'admin');
            $_SESSION['user'] = serialize($user);
        }
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        } elseif ($this->form->getLogin() == "user" && $this->form->getPassword() == "user") {
            $user = new User($this->form->getLogin(), 'user');
            $_SESSION['user'] = serialize($user);
        } else {
            getMessages()->pushError("Incorrect credentials!");
            return false;
        }

        return true;
    }

    public function render(): void
    {
        getSmarty()->assign('page_title', 'Login page');
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('LoginView.tpl');
    }

    public function actionLogin(): void
    {
        try {
            $this->getParams();
        } catch (\Exception $e) {
            getMessages()->pushError("Failed while getting credentials!");
            return;
        }

        if ($this->validate()) {
            header("Location: " . getConf()->getAppURL() . "/");
        } else {
            $this->render();
        }
    }

    public function actionLogout(): void
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();

        getMessages()->pushInfo("Successfully logout!");
        $this->render();
    }

}