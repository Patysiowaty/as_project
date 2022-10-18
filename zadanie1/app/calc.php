<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$amount_of_credit = $_REQUEST ['amount_of_credit'];
$credit_years = $_REQUEST ['credit_years'];
$interest_value = $_REQUEST ['interest_value'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if (!(isset($amount_of_credit) && isset($credit_years) && isset($interest_value))) {
    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
    $messages [] = 'Something went wrong. Try again.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ($amount_of_credit == "") {
    $messages [] = 'Missing amount of credit!';
}

if ($credit_years == "") {
    $messages [] = 'Missing years of credit';
}

if ($interest_value == "") {
    $messages[] = 'Missing interest value';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty($messages)) {

    // sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (!is_numeric($amount_of_credit)) {
        $messages [] = 'Amount of credit must be number!';
    }

    if (!is_numeric($credit_years)) {
        $messages [] = 'Years of credit must be number!';
    }

    if (!is_numeric($interest_value)) {
        $messages [] = 'Interest value must be a number!';
    }
}

if (empty($messages)) {
    $amount_of_credit = intval($amount_of_credit);
    if ($amount_of_credit < 0) {
        $messages [] = 'Amount of credit must be positive number!';
    }

    if ($amount_of_credit == 0) {
        $messages [] = 'Amount of credit must be greater than 0!';
    }

    $credit_years = intval($credit_years);
    if ($credit_years < 0) {
        $messages [] = 'Years of credit must be positive number!';
    }

    if ($credit_years > 40) {
        $messages [] = 'Years of credit cannot be larger than 40!';
    }

    $interest_value = intval($interest_value);
    if ($interest_value < 0) {
        $messages [] = 'Interest value must be positive number!';
    }

    if ($interest_value > 200) {
        $messages [] = 'Interest value cannot be larger than 200%!';
    }
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ($messages)) { // gdy brak błędów
    $num_of_months = $credit_years * 12;
    $total_credit_value = $amount_of_credit * ($interest_value + 100) / 100;
    $result = $total_credit_value / $num_of_months;
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';