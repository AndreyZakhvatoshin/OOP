<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function actionIndex()
    {
        // Create new Plates instance
        $templates = new \League\Plates\Engine('../src/Views/templates');

        // Render a template
        echo $templates->render('sign-up');
    }

    public function regist()
    {
        $user = new User;
        $user->signUp();
    }

}