{extends file="main.tpl"}

{block name=content}
    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->getActionURL()}logout" class="pure-menu-heading pure-menu-link">logout</a>
        <span style="float:right;">User: {$user->login}, rola: {$user->role}</span>
    </div>
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="{$conf->getActionUrl()}compute" method="post">
            <fieldset>
                <label for="amount_of_credit">Amount of credit</label>
                <input id="amount_of_credit" type="number" placeholder="Amount of credit" name="amount_of_credit"
                       value="{$amountCredit}" min="1" max="10000000">

                <label for="credit_years">Years of credits</label>
                <input id="credit_years" type="number" placeholder="Credit's year" name="credit_years"
                       value="{$creditYear}" min="1" max="40">

                <label for="interest_value">Interest's value</label>
                <input id="interest_value" type="number" placeholder="Interest value" name="interest_value" min="0"
                       value="{$interestValue}" max="200">

                <button type="submit" class="pure-button">Calculate</button>
            </fieldset>
        </form>
    </div>
    {include file='messages.tpl'}

    {if isset($res->result)}
        <div class="messages inf">
            Wynik: {$res->result}
        </div>
    {/if}

{/block}