<?php

namespace App\Controllers;

use App\Models\Posts;
use League\Plates\Engine;

class PostsController
{
    private $template;
    private $posts;

    public function __construct(Engine $template, Posts $posts)
    {
        $this->template = $template;
        $this->posts = $posts;
    }

    public function actionIndex()
    {
        $myPosts = $this->posts->all();
        echo $this->template->render('posts', ['posts' => $myPosts]);
    }
}