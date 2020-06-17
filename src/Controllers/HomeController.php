<?php

namespace App\Controllers;

use League\Plates\Engine;
use App\Models\User;

class HomeController
{
    private $templates;
    private $user;

    public function __construct(Engine $templates, User $user)
    {
        $this->templates = $templates;
        $this->user = $user;
    }
    public function actionIndex()
    {
        echo $this->templates->render('main', ['user' => $this->user]);
    }
}
