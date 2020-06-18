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
        $myPosts = array_reverse($this->posts->all('posts'));
        echo $this->template->render('posts/posts', ['posts' => $myPosts]);
    }

    public function showAddForm()
    {
        echo $this->template->render('posts/addpost');
    }
    public function add()
    {
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['date'] = date('d.m.Y');
        $this->posts->store('posts', $data);

        header('Location: /posts');
    }

    public function showPost($id)
    {
        $post = $this->posts->show('posts', $id);

        echo $this->template->render('posts/show', ['post' => $post]);
    }
}
