<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', ["App\Controllers\FrontController", "actionIndex"]);
    $r->addRoute('GET', '/sign-up', ["App\Controllers\UserController", "actionIndex"]);
    $r->addRoute('POST', '/regist', ["App\Controllers\UserController", "regist"]);
    $r->addRoute('GET', '/posts', ["App\Controllers\PostsController", "actionIndex"]);
    $r->addRoute('GET', '/posts/add', ["App\Controllers\PostsController", "addPost"]);
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});