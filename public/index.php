<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

$user = new \App\Models\Name('Andrey', 'Zakhvatoshin');

$user->sayHello();