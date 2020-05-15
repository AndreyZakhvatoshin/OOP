<?php

namespace App\Controllers;

use App\Models\User;
use League\Plates\Engine;

class UserController
{
    private $templates;

    public function __construct(Engine $templates)
    {
        $this->templates = $templates;
    }
    public function actionIndex()
    {
        echo $this->templates->render('sign-up');
    }

    public function regist()
    {
        $user = new User;
        $user->signUp();

        header('Location: /');
    }

}