<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use SmartyException;

class HomeController
{
    /**
     * @throws SmartyException
     */
    public function action_home(): void
    {
        App::getSmarty()->display("Home.tpl");
    }

}