<?php

namespace app\controllers;

interface IController
{
    public function render();

    public function process();
}