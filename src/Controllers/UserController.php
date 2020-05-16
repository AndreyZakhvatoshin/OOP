<?php

namespace App\Controllers;

use PDO;
use App\Models\User;
use League\Plates\Engine;

class UserController
{
    private $templates;
    private $db;

    public function __construct(Engine $templates, PDO $db)
    {
        $this->templates = $templates;
        $this->db = $db;
    }
    public function actionIndex()
    {
        echo $this->templates->render('sign-up');
    }

    public function regist()
    {
        $user = new User($this->db);
        $user->signUp();

        header('Location: /');
    }

}