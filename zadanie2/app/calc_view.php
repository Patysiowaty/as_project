<?php

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Credits' calc</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

    <form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
        <legend>Credits' calculator</legend>
        <fieldset>
            <label for="amount_of_credit">Amount of credit: </label>
            <input id="amount_of_credit" type="number" name="amount_of_credit" min="1"
                   value="<?php out($amount_of_credit); ?>"/>
            <label for="credit_years">Years of credit: </label>
            <input id="credit_years" type="number" name="credit_years" min="0" max="40"
                   value="<?php out($credit_years); ?>"/>
            <label for="interest_value">Interest: </label>
            <input id="interest_value" type="number" name="interest_value" min="0" max="200"
                   value="<?php out($interest_value); ?>"/>
        </fieldset>
        <input type="submit" value="Calc" class="pure-button pure-button-primary"/>
    </form>

    <?php
    if (isset($messages)) {
        if (count($messages) > 0) {
            echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
            foreach ($messages as $key => $msg) {
                echo '<li>' . $msg . '</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if (isset($result)) { ?>
        <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
            <?php echo 'Wynik: ' . $result; ?>
        </div>
    <?php } ?>

</div>

</body>
</html>