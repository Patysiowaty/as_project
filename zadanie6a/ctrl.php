<?php
require_once 'init.php';

switch ($action) {
    default:
        include_once $conf->getAppSrc() . '/controllers/MenuController.class.php';
        $ctrl = new MenuController($conf);
        $ctrl->process();
        break;
    case 'calculator':
        include_once $conf->getAppSrc() . '/controllers/CreditCalculatorController.class.php';
        $ctrl = new CreditCalculatorController($conf);
        $ctrl->render();
        break;
    case 'compute':
        include_once $conf->getAppSrc() . '/controllers/CreditCalculatorController.class.php';
        $ctrl = new CreditCalculatorController($conf);
        $ctrl->process();
}
