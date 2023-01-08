<?php

namespace app\controllers;

use app\models\Brand;
use core\App;
use Exception;
use SmartyException;

class AboutController
{
    private array $brands;

    public function __construct()
    {
        $this->brands = array();
        $this->loadBrands();
    }

    private function loadBrands(): void
    {
        $result = App::getDB()->select("Brand", ["name", "logo"]);

        foreach ($result as $item) {
            try {
                $brand = new Brand($item["name"] ?? throw new Exception("No brand name provided!"));
                $logo = $item["logo"];
                if (isset($logo))
                    $brand->setLogo($logo);
                $this->brands[] = $brand;
            } catch (Exception $e) {
                continue;
            }
        }
    }

    /**
     * @throws SmartyException
     */
    public function action_about(): void
    {
        App::getSmarty()->assign("brandsLogo", $this->brands);
        App::getSmarty()->assign("brandsSize", count($this->brands));
        App::getSmarty()->display("About.tpl");
    }

}