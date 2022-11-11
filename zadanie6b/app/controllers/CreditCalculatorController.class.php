<?php

namespace app\controllers;

use app\forms\CalculatorForm;

class CreditCalculatorController implements IController
{
    private CalculatorForm $calcForm;
    private float $result;
    private bool $hideIntro;

    public function __construct()
    {
        $this->result = -1;
        $this->calcForm = new CalculatorForm();
        $this->hideIntro = false;
    }

    public function process(): void
    {
        $this->calcForm->readRequestData();

        if ($this->calcForm->validate()) {
            $num_of_months = $this->calcForm->getCreditYears() * 12;
            $total_credit_value = $this->calcForm->getAmountOfCredit() * ($this->calcForm->getInterestValue() + 100) / 100;
            $this->result = $total_credit_value / $num_of_months;
            $this->hideIntro = true;
        }

        $this->render();
    }


    public function render(): void
    {
        getSmarty()->assign('page_title', 'Ex6. Credit calculator');
        getSmarty()->assign('page_description', 'Calculate your credit');
        getSmarty()->assign('page_header', 'Credit calculator');
        getSmarty()->assign('interestValue', $this->calcForm->getInterestValue());
        getSmarty()->assign('amountCredit', $this->calcForm->getAmountOfCredit());
        getSmarty()->assign('creditYear', $this->calcForm->getCreditYears());
        getSmarty()->assign('hide_intro', $this->hideIntro);
        getSmarty()->assign('res', $this->result);
        getSmarty()->display(getConf()->getRootPath() . '/app/views/CalcView.html');
    }
}