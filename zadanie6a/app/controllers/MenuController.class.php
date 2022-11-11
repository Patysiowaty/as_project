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
        $smarty = new Smarty();
        $smarty->assign('conf', $this->config);

        $smarty->assign('page_title', 'Ex6. Main menu');
        $smarty->assign('page_description', '');
        $smarty->assign('page_header', 'Main menu');

        $smarty->assign('hide_intro', false);
        $smarty->assign('isLandingPage', true);


        $smarty->display($this->config->getRootPath() . '/app/views/MenuView.html');
    }

    public function process()
    {
        $this->render();
    }
}