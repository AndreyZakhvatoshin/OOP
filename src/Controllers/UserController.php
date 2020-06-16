<?php

namespace App\Controllers;

use App\Models\User;
use League\Plates\Engine;

class UserController
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
        echo $this->templates->render('sign-up');
    }

    public function regist()
    {
        $this->user->signUp();

        header('Location: /');
    }

    public function showLoginForm()
    {
        echo $this->templates->render('sign-in');
    }

    public function enter()
    {
        $this->user->login();
        header('Location: /');
    }

    public function logout()
    {
        $this->user->logout();
        
        header('Location: /');
    }

}