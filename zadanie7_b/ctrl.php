<?php
require_once 'init.php';

getRouter()->setDefaultRoute('showMenu'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('ShowCalculator', 'CreditCalculatorController', ['user', 'admin']);
getRouter()->addRoute('Compute', 'CreditCalculatorController', ['user', 'admin']);
getRouter()->addRoute('Login', 'LoginController');
getRouter()->addRoute('Logout', 'LoginController', ['user', 'admin']);
getRouter()->addRoute('ShowMenu', "MenuController", ['user', 'admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';