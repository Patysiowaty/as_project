<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';

//załaduj Twig
require_once _ROOT_PATH . '/lib/Twig/Autoloader.php';

$hide_intro = false;

$amount_of_credit = null;
$credit_years = null;
$interest_value = null;
$result = null;
$messages = array();
$infos = array();
const invalid_value = -1;

function getParams(&$amount_of_credit, &$credit_years, &$interest_value): void
{
    $amount_of_credit = $_REQUEST ['amount_of_credit'] ?? $amount_of_credit;
    $credit_years = $_REQUEST ['credit_years'] ?? $credit_years;
    $interest_value = $_REQUEST ['interest_value'] ?? $interest_value;
}

function checkIsInRange(int $value, int $min, int $max): bool
{
    return $value >= $min && $value <= $max;
}

function validate(&$amount_of_credit, &$credit_years, &$interest_value, &$messages): bool
{
    if (!(isset($amount_of_credit) && isset($credit_years) && isset($interest_value))) {
        return false;
    }

    if ($amount_of_credit == "") {
        $messages [] = 'Missing amount of credit!';
    }

    if ($credit_years == "") {
        $messages [] = 'Missing years of credit';
    }

    if ($interest_value == "") {
        $messages[] = 'Missing interest value';
    }

    if (!empty($messages)) return false;

    if (!is_numeric($amount_of_credit)) {
        $messages [] = 'Amount of credit must be number!';
    }

    if (!is_numeric($credit_years)) {
        $messages [] = 'Years of credit must be number!';
    }

    if (!is_numeric($interest_value)) {
        $messages [] = 'Interest value must be a number!';
    }

    if (!empty($messages)) return false;

    $amount_of_credit = intval($amount_of_credit);
    $credit_years = intval($credit_years);
    $interest_value = intval($interest_value);

    if (!checkIsInRange($amount_of_credit, 1, 10000000)) {
        $messages[] = 'Amount of credit must be in the range 1 - 10000000!';
    }

    if (!checkIsInRange($credit_years, 1, 40)) {
        $messages [] = 'Years of credit must be in the range 1 - 40!';
    }

    if (!checkIsInRange($interest_value, 0, 200)) {
        $messages [] = 'Interest value must be in the range 0 - 200!';
    }

    return empty($messages);
}

function process($amount_of_credit, $credit_years, $interest_value, &$infos): float
{
    $infos[] = 'Symulation for given data has been prepared.';
    $num_of_months = $credit_years * 12;
    $total_credit_value = $amount_of_credit * ($interest_value + 100) / 100;
    return $total_credit_value / $num_of_months;
}

getParams($x, $y, $operation);

if (validate($x, $y, $operation, $messages)) {
    $result = process($x, $y, $operation, $infos);
    if ($result == invalid_value)
        $result = null;
}

// 4. Przygotowanie szablonu i zmiennych

//start Twig
Twig_Autoloader::register();
//załaduj szablony (wskazanie folderów z potrzebnymi szablonami)
$loader = new Twig_Loader_Filesystem(_ROOT_PATH . '/templates'); //szablon ogólny
$loader->addPath(_ROOT_PATH . '/app'); //szablon strony kalkulatora
//skonfiguruj folder cache
$twig = new Twig_Environment($loader, array('cache' => _ROOT_PATH . '/twig_cache'));

//przygotowanie zmiennych dla szablonu
$variables = array(
    'app_url' => _APP_URL,
    'root_path' => _ROOT_PATH,
    'page_title' => "Credit's calculator",
    'page_description' => 'Calculate symulation for your credit',
    'page_header' => 'Credit\'s calculator',
);

if (isset($amount_of_credit)) $variables ['amount_of_credit'] = $amount_of_credit;
if (isset($credit_years)) $variables ['credit_years'] = $credit_years;
if (isset($interest_value)) $variables ['interest_value'] = $interest_value;
if (isset($result)) $variables ['result'] = $result;
if (isset($messages)) $variables ['messages'] = $messages;
if (isset($infos)) $variables ['infos'] = $infos;

// 5. Wywołanie szablonu (wygenerowanie widoku)
echo $twig->render('calc.html', $variables);