<?php
require_once 'init.php';

getConf()->login_action = 'login'; //określenie akcji logowania - robimy to w tym miejscu, ponieważ tu są zdefiniowane wszystkie akcje

switch ($action) {
    default :
        control('app\\controllers', 'MenuController', 'process', ['user', 'admin']);
    case "calculator":
        control('app\\controllers', 'CreditCalculatorController', 'render', ['user', 'admin']);
    case 'login':
        control('app\\controllers', 'LoginController', 'login');
    case 'compute' :
        control(null, 'CreditCalculatorController', 'process', ['user', 'admin']);
    case 'logout' :
        control(null, 'LoginController', 'logout', ['user', 'admin']);
}