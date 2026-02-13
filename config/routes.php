<?php

/** @var  \PHPFramework\Application $app */


$app->router->add('/', function(){
    return 'Hello from home';
}, ['post', 'get']);

$app->router->get('/test', [\App\Controllers\HomeController::class, 'test'], 'GET');
$app->router->post('/contact', [\App\Controllers\ContactController::class, 'test'], 'post');

dump($app->router->getRoutes());