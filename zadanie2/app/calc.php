<?php
require_once dirname(__FILE__) . '/../config.php';

include _ROOT_PATH . '/app/security/check.php';

$amount_of_credit = null;
$credit_years = null;
$interest_value = null;
$result = null;
$messages = array();
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
        $messages[] = 'Amount of credit must be in the range 0 - 10000000!';
    }

    if (!checkIsInRange($credit_years, 1, 40)) {
        $messages [] = 'Years of credit must be in the range 1 - 40!';
    }

    if (!checkIsInRange($interest_value, 0, 200)) {
        $messages [] = 'Interest value must be in the range 0 - 200!';
    }

    return empty($messages);
}

function process($amount_of_credit, $credit_years, $interest_value, &$messages): float
{
    global $role;

    if ($role != 'admin') {
        $messages[] = 'Only admin can use calculator';
        return invalid_value;
    }

    $num_of_months = $credit_years * 12;
    $total_credit_value = $amount_of_credit * ($interest_value + 100) / 100;
    return $total_credit_value / $num_of_months;
}

getParams($x, $y, $operation);

if (validate($x, $y, $operation, $messages)) {
    $result = process($x, $y, $operation, $messages);
    if ($result == invalid_value)
        $result = null;
}

include 'calc_view.php';