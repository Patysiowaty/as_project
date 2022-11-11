<?php
require_once $conf->getRootPath() . '/app/controllers/IController.class.php';
require_once $conf->getRootPath() . '/lib/smarty/Smarty.class.php';

class MenuController implements IController
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function render()
    {
        getSmarty()->assign('page_title', 'Ex6. Main menu');
        getSmarty()->assign('page_description', '');
        getSmarty()->assign('page_header', 'Main menu');

        getSmarty()->assign('hide_intro', false);
        getSmarty()->assign('isLandingPage', true);


        getSmarty()->display($this->config->getRootPath() . '/app/views/MenuView.html');
    }

    public function process()
    {
        $this->render();
    }
}