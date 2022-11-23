<?php
require_once 'init.php';

switch ($action) {
    default:
        $ctrl = new app\controllers\MenuController();
        $ctrl->process();
        break;
    case 'calculator':
        $ctrl = new app\controllers\CreditCalculatorController();
        $ctrl->render();
        break;
    case 'compute':
        $ctrl = new app\controllers\CreditCalculatorController();
        $ctrl->process();
    case 'login':
        $ctrl = new app\controllers\LoginController();
        $ctrl->login();
        break;
    case 'logout' :
        include 'check.php';
        $ctrl = new app\controllers\LoginController();
        $ctrl->logout();
        break;
}
