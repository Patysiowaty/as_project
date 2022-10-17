<?php require_once dirname(__FILE__) . '/../config.php'; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Credit's calc</title>
</head>
<body>

<div class="calculator" style="background-color: aquamarine;width: 380px;height: 150px">
    <form action="<?php print(_APP_URL); ?>/app/calc.php" method="post">
        <h3 style="margin: auto; text-align: center">Credit's calculator</h3>
        <label style="margin-left: 10px;" for="amount_of_credit">Amount of credit: </label>
        <input id="amount_of_credit" type="number" name="amount_of_credit" min="1" style="margin-left: 5px"
               value="<?php isset($amount_of_credit) ? print($amount_of_credit) : ""; ?>"/> [PLN]<br/>
        <label for="credit_years" style="margin-left: 10px;">Years of credit: </label>
        <input id="credit_years" type="number" name="credit_years" min="0" max="40" style="margin-left: 26px;"
               value="<?php isset($credit_years) ? print($credit_years) : "" ?>"/><br/>
        <label for="interest_value" style="margin-left: 10px;">Interest: </label>
        <input id="interest_value" type="number" name="interest_value" min="0" max="200" style="margin-left: 72px;"
               value="<?php isset($interest_value) ? print($interest_value) : ""; ?>"/> %<br/>
        <input type="submit" style="width: 50px;display: block; margin: 15px auto auto;" value="Oblicz"/>
    </form>
</div>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if (isset($result)) { ?>
    <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        <?php echo 'Monthly loan installment: ' . $result . " [PLN]"; ?>
    </div>
<?php } ?>

</body>
</html>