<?php

/** @var  \PHPFramework\Application $app */

use PHPFramework\Middleware\Auth;
use PHPFramework\Middleware\Guest;
use App\Controllers\HomeController;
use App\Controllers\UserController;

const MIDDLEWARE = [
    'auth' => Auth::class,
    'guest' => Guest::class,
];


$app->router->get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth']);
$app->router->get('/register', [UserController::class, 'register'])->middleware(['guest']);
$app->router->post('/register', [UserController::class, 'store'])->middleware(['guest']);
$app->router->get('/login', [UserController::class, 'login'])->middleware(['guest']);
$app->router->get('/users', [UserController::class, 'index']);

$app->router->get('/post/(?P<slug>[a-z0-9-]+)', function () {
    return 'Post ' . get_route_param('slug', 'test');
});

$app->router->get('/', [HomeController::class, 'index']);

// return dump(__FILE__ . __LINE__, $app->router->getRoutes());