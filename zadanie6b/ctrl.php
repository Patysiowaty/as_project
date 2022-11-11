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
}
