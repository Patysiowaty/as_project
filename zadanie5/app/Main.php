<?php
require_once dirname(__FILE__) . '/../Config.php';

require_once $conf->getRootPath() . APP_SRC . '/CreditCalculatorController.class.php';

$calc = new CreditCalculatorController($conf);

$calc->process();
