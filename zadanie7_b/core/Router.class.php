<?php

namespace core;

use Exception;

class Router
{

    public $action = null;
    public array $routes = array();
    private $default = null;
    private string $login = 'login';

    public function setAction($action): void
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function addRouteEx($action, $namespace, $controller, $method, $roles = null): void
    {
        $this->routes[$action] = new Route($namespace, $controller, $method, $roles);
    }

    public function addRoute($action, $controller, $roles = null): void
    {
        $this->routes[$action] = new Route(null, $controller, 'action' . $action, $roles);
    }

    public function setDefaultRoute($route): void
    {
        $this->default = $route;
    }

    public function setLoginRoute($route): void
    {
        $this->login = $route;
    }

    private function control($namespace, $controller, $method, $roles = null): void
    {
        if (!empty($roles)) {
            $found = false;
            if (is_array($roles)) {
                foreach ($roles as $role) {
                    if (inRole($role)) {
                        $found = true;
                        break;
                    }
                }
            } else {
                if (inRole($roles))
                    $found = true;
            }
            if (!$found)
                forwardTo($this->login);
        }
        if (empty($namespace)) {
            $controller = "app\\controllers\\" . $controller;
        } else {
            $controller = $namespace . "\\" . $controller;
        }
        $ctrl = new $controller;
        if (method_exists($ctrl, $method)) {
            $ctrl->$method();
        } else {
            throw new Exception('Method "' . $method . '" does not exist in "' . $controller . '"');
        }
        exit;
    }

    public function go(): void
    {
        if (isset($this->routes[$this->action])) {
            $r = $this->routes[$this->action];
            $this->control($r->namespace, $r->controller, $r->method, $r->roles);
        } else {
            if (isset($this->default) && isset($this->routes[$this->default])) {
                $r = $this->routes[$this->default];
                $this->control($r->namespace, $r->controller, $r->method, $r->roles);
            } else {
                throw new Exception('Route for "' . $this->action . '" is not defined');
            }
        }
    }

}
