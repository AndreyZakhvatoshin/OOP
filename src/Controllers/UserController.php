<?php

namespace App\Controllers;

class UserController
{
    public function signUpUser()
    {
        // Create new Plates instance
        $templates = new \League\Plates\Engine('../src/Views/templates');

        // Render a template
        echo $templates->render('sign-up');
    }

    public function sayHello()
    {
        echo 'Hello';
    }
}