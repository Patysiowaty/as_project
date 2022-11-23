<?php

function getFrom(&$source, &$idx, &$required, &$required_message)
{
    if (isset($source[$idx])) {
        return $source[$idx];
    } else {
        if ($required) getMessages()->pushError($required_message);
        return null;
    }
}

function getFromRequest($param_name, $required = false, $required_message = null)
{
    return getFrom($_REQUEST, $param_name, $required, $required_message);
}

function getFromGet($param_name, $required = false, $required_message = null)
{
    return getFrom($_GET, $param_name, $required, $required_message);
}

function getFromPost($param_name, $required = false, $required_message = null)
{
    return getFrom($_POST, $param_name, $required, $required_message);
}

function getFromCookies($param_name, $required = false, $required_message = null)
{
    return getFrom($_COOKIES, $param_name, $required, $required_message);
}

function getFromSession($param_name, $required = false, $required_message = null)
{
    return getFrom($_SESSION, $param_name, $required, $required_message);
}

function forwardTo($action_name): void
{
    global $action;
    $action = $action_name;
    include getConf()->getRootPath() . "/ctrl.php";
    exit;
}

function redirectTo($action_name): void
{
    header("Location: " . getConf()->getActionURL() . $action_name);
    exit;
}

function addRole($role): void
{
    getConf()->roles [$role] = true;
    $_SESSION['_roles'] = serialize(getConf()->roles);
}

function inRole($role): bool
{
    return isset(getConf()->roles[$role]);
}

function control($namespace, $controller, $method, $roles = null): void
{
    if ($roles != null) {
        $found = false;
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if (inRole($role)) {
                    $found = true;
                    break;
                }
            }
        } else {
            if (inRole($roles)) $found = true;
        }
        if (!$found) forwardTo(getConf()->loginAction);
    }
    if (empty($namespace)) {
        $controller = "app\\controllers\\" . $controller;
    } else {
        $controller = $namespace . "\\" . $controller;
    }
    include_once getConf()->getRootPath() . DIRECTORY_SEPARATOR . $controller . '.class.php';
    $ctrl = new $controller;
    if (is_callable(array($ctrl, $method))) {
        $ctrl->$method();
    }
    exit;
}