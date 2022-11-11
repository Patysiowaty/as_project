<?php

require_once $conf->getRootPath() . '/core/Messages.class.php';
require_once $conf->getAppSrc() . '/controllers/CalcFormController.class.php';
require_once $conf->getAppSrc() . '/controllers/IController.class.php';
require_once $conf->getRootPath() . '/lib/smarty/Smarty.class.php';

class CreditCalculatorController implements IController
{
    private Messages $messages;
    private CalcForm $calcForm;
    private float $result;
    private Config $config;
    private bool $hideIntro;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->result = -1;
        $this->messages = new Messages();
        $this->calcForm = new CalcForm($this->messages);
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
        getSmarty()->assign('msgs', $this->messages);
        getSmarty()->assign('interestValue', $this->calcForm->getInterestValue());
        getSmarty()->assign('amountCredit', $this->calcForm->getAmountOfCredit());
        getSmarty()->assign('creditYear', $this->calcForm->getCreditYears());
        getSmarty()->assign('hide_intro', $this->hideIntro);
        getSmarty()->assign('res', $this->result);
        getSmarty()->display($this->config->getRootPath() . '/app/views/CalcView.html');
    }
}