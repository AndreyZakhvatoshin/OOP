<?php

namespace App\Controllers;

use Aura\SqlQuery\QueryFactory;

class PostsController
{
    public static function actionIndex()
    {
        $queryFactory = new QueryFactory('mysql');

        // Create new Plates instance
        $templates = new \League\Plates\Engine('../src/Views/templates');
        // Render a template
        echo $templates->render('main', ['name' => 'Andrey']);
    }

    public function allPosts()
    {
        $templates = new \League\Plates\Engine('../src/Views/templates');

        // Render a template
        echo $templates->render('posts', ['name' => 'Andrey']);
    }
    public function addPost()
    {
        $templates = new \League\Plates\Engine('../src/Views/templates');

        // Render a template
        echo $templates->render('addpost', ['name' => 'Andrey']);
    }
}