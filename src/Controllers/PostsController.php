<?php

namespace App\Controllers;

use League\Plates\Engine;

class PostsController
{
    private $template;

    public function __construct(Engine $template)
    {
        $this->template = $template;
    }

    public function actionIndex()
    {
        echo $this->template->render('main');
    }
}