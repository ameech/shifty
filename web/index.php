<?php

define('APP_PATH', realpath(__DIR__ . '/..') . DIRECTORY_SEPARATOR);

require APP_PATH . 'vendor/autoload.php';

$fpdo = new FluentPDO(new PDO("mysql:dbname=shifty", "root"));

$injector = new \Auryn\Injector;
$injector->share($fpdo);

$app = Spark\Application::boot($injector);

$app->addRoutes(function(Spark\Router $r) {
    $r->get('/shifts', 'Spark\Project\Action\Shift\GetList');
});

$app->run();
