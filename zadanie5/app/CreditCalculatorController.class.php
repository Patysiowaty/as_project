<?php

require_once $conf->getRootPath() . APP_SRC . '/Messages.class.php';
require_once $conf->getRootPath() . APP_SRC . '/CalcForm.class.php';
require_once $conf->getRootPath() . '/lib/Twig/Autoloader.php';

class CreditCalculatorController
{
    private Messages $messages;
    private CalcForm $calcForm;
    private float $result;
    private Config $config;

    private function render(): void
    {
        Twig_Autoloader::register();
        try {
            $loader = new Twig_Loader_Filesystem($this->config->getRootPath() . '/templates');

            $loader->addPath($this->config->getRootPath() . '/app');

            $twig = new Twig_Environment($loader, array('cache' => $this->config->getRootPath() . '/twig_cache'));
            echo $this->config->getAppURL();
            $variables = array(
                'app_url' => $this->config->getAppURL(),
                'root_path' => $this->config->getRootPath(),
                'page_title' => "Credit's calculator",
                'page_description' => 'Calculate simulation for your credit',
                'page_header' => 'Credit\'s calculator',
            );

            if ($this->calcForm->getAmountOfCredit() != 0) $variables ['amount_of_credit'] = $this->calcForm->getAmountOfCredit();
            if ($this->calcForm->getCreditYears() != 0) $variables ['credit_years'] = $this->calcForm->getCreditYears();
            if ($this->calcForm->getInterestValue() != 0) $variables ['interest_value'] = $this->calcForm->getInterestValue();
            if ($this->result > 0) $variables ['result'] = $this->result;
            if ($this->messages->hasErrors()) $variables ['messages'] = $this->messages->getErrors();
            if ($this->messages->hasInfos()) $variables ['infos'] = $this->messages->getInfos();

            echo $twig->render('calc.html', $variables);
        } catch (Twig_Error_Loader $e) {
            echo $e->getMessage();
        }
    }

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->result = -1;
        $this->messages = new Messages();
        $this->calcForm = new CalcForm($this->messages);
    }

    public function process(): void
    {
        $this->calcForm->readRequestData();
        if ($this->calcForm->validate()) {
            $num_of_months = $this->calcForm->getCreditYears() * 12;
            $total_credit_value = $this->calcForm->getAmountOfCredit() * ($this->calcForm->getInterestValue() + 100) / 100;
            $this->result = $total_credit_value / $num_of_months;
        }

        $this->render();
    }
}