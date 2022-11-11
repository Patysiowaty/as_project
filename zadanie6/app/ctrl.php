<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once dirname(__FILE__) . '/../config.php';


$action = $_REQUEST['action'];

switch ($action) {
    default:
        include_once $conf->getRootPath() . '/app/calc/MenuController.class.php';
        $ctrl = new MenuController($conf);
        $ctrl->process();
        break;
    case 'calculator':
        include_once $conf->getRootPath() . '/app/calc/CreditCalculatorController.class.php';
        $ctrl = new CreditCalculatorController($conf);
        $ctrl->render();
        break;
    case 'compute':
        include_once $conf->getAppSrc() . '/calc/CreditCalculatorController.class.php';
        $ctrl = new CreditCalculatorController($conf);
        $ctrl->process();
}
