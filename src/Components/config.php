<?php

return [
    Engine::class => function() {
        return new Engine('../src/Views/templates');
    },
    QueryFactory::class => function() {
        return new QueryFactory('mysql');
    },
    PDO::class => function() {
        return new PDO('mysql:dbname=blog;host=localhost;charset=utf8mb4', 'admin', 'password');
    },
    Auth::class => function($container) {
        return new Auth($container->get('PDO'));
    }
];
