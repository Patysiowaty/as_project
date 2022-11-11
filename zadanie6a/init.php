<?php

require_once dirname(__FILE__) . '/core/Config.class.php';

const SERVER_NAME = 'localhost:80';
const APP_ROOT = '/zadanie6a';
const APP_SRC = '/app';

$conf = new Config(SERVER_NAME, APP_ROOT);

function &getConf(): Config
{
    global $conf;
    return $conf;
}

require_once getConf()->getRootPath() . '/core/Messages.class.php';

$msgs = new Messages();

function &getMessages(): Messages
{
    global $msgs;
    return $msgs;
}

$smarty = null;
function &getSmarty(): ?Smarty
{
    global $smarty;
    if (!isset($smarty)) {
        include_once getConf()->getRootPath() . '/lib/smarty/Smarty.class.php';
        $smarty = new Smarty();
        $smarty->assign('conf', getConf());
        $smarty->assign('msgs', getMessages());

        $smarty->setTemplateDir(array(
            'one' => getConf()->getRootPath() . '/app/views',
            'two' => getConf()->getRootPath() . '/app/views/templates'
        ));
    }
    return $smarty;
}

require_once getConf()->getRootPath() . '/core/functions.php';

$action = getFromRequest('action');
