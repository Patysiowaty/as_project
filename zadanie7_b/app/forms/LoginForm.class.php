<?php

namespace app\forms;

use http\Exception\InvalidArgumentException;

class LoginForm {
	private string $login;
	private string $password;

    public function __construct() {
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setLogin(string $login): void
    {
        if (empty($login)) {
            getMessages()->addError("Login cannot be empty!");
            return;
        }

        $this->login = $login;
    }

    public function setPassword(string $password): void
    {
        if (empty($password)) {
            getMessages()->addError("Password cannot be empty!");
        }

        $this->password = $password;
    }
} 