<?php

namespace core;

use app\models\User;

/**
 * Wrapper class for role utility functions
 *
 * @author Przemysław Kudłacik
 */
class RoleUtils
{

    public static function addRole($role)
    {
        App::getConf()->roles [$role] = true;
        $_SESSION['_amelia_roles'] = serialize(App::getConf()->roles);
    }

    public static function removeRole($role)
    {
        if (isset(App::getConf()->roles [$role])) {
            unset(App::getConf()->roles [$role]);
            $_SESSION['_amelia_roles'] = serialize(App::getConf()->roles);
        }
    }

    public static function inRole($role)
    {
        return isset(App::getConf()->roles[$role]);
    }

    public static function requireRole($role, $fail_action = null)
    {
        if (App::getConf()->debug) {
            echo "debug";
            foreach (App::getConf()->roles as $user_role => $temp) {
                echo "user roles:" . $user_role;
            }
        }

        if (!self::inRole($role)) {
            if (isset($fail_action))
                App::getRouter()->redirectTo($fail_action);
            else
                App::getRouter()->redirectTo(App::getRouter()->getLoginRoute());
        }
    }

    public static function isGuest(): bool
    {
        return empty(App::getConf()->roles);
    }
}
