<?php

declare(strict_types=1);
use DI\ContainerBuilder;
use Relay\Relay;
use Zend\Diactoros\ServerRequestFactory;
use function DI\create;
use App\Models\Name;

require dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions([
    Name::class => create(Name::class)
]);

$container = $containerBuilder->build();
$name = $container->get(Name::class);

$name->sayHello();