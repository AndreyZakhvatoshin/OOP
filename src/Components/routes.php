<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', ["App\Controllers\HomeController", "actionIndex"]);
    $r->addRoute('GET', '/sign-up', ["App\Controllers\UserController", "actionIndex"]);
    $r->addRoute('GET', '/sign-in', ["App\Controllers\UserController", "showLoginForm"]);
    $r->addRoute('GET', '/exit', ["App\Controllers\UserController", "logout"]);
    $r->addRoute('POST', '/regist', ["App\Controllers\UserController", "regist"]);
    $r->addRoute('POST', '/login', ["App\Controllers\UserController", "enter"]);
    $r->addRoute('GET', '/posts', ["App\Controllers\PostsController", "actionIndex"]);
    $r->addRoute('GET', '/posts/add', ["App\Controllers\PostsController", "showAddForm"]);
    $r->addRoute('GET', '/posts/{id:\d+}', ["App\Controllers\PostsController", "showPost"]);
    $r->addRoute('POST', '/posts/store', ["App\Controllers\PostsController", "add"]);
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});
