<?php

namespace App\Controllers;

use League\Plates\Engine;

class FrontController
{
    private $templates;

    public function __construct(Engine $templates)
    {
        $this->templates = $templates;
    }
    public function actionIndex()
    {
        echo $this->templates->render('main');
    }
}