<?php

namespace app\controllers;

class MenuController
{

    public function __construct()
    {
    }

    public function action_showMenu()
    {
        getSmarty()->assign('page_title', 'Ex6. Main menu');
        getSmarty()->assign('page_description', '');
        getSmarty()->assign('page_header', 'Main menu');

        getSmarty()->assign('hide_intro', false);
        getSmarty()->assign('isLandingPage', true);


        getSmarty()->display(getConf()->getRootPath() . '/app/views/MenuView.tpl');
    }
}