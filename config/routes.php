<?php

/** @var  \PHPFramework\Application $app */

use App\Controllers\Api\V1\CategoryController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use App\Controllers\PostController;
use App\Controllers\UserController;
use PHPFramework\Middleware\Auth;
use PHPFramework\Middleware\Guest;

const MIDDLEWARE = [
    'auth' => Auth::class,
    'guest' => Guest::class,
];

$app->router->add('/api/v1/test', function () {
    response()->json(['status' => 'ok', 'message' => 'Success page']);
}, ['get', 'post', 'put'])->withoutCsrfToken();

$app->router->get('/api/v1/categories', [CategoryController::class, 'index']);
$app->router->get('/api/v1/categories/(?P<slug>[a-z0-9-]+)', [CategoryController::class, 'view']);

$app->router->get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth']);
$app->router->get('/register', [UserController::class, 'register'])->middleware(['guest']);
$app->router->post('/register', [UserController::class, 'store'])->middleware(['guest']);
$app->router->get('/logout', [UserController::class, 'logout'])->middleware(['auth']);
$app->router->get('/login', [UserController::class, 'login'])->middleware(['guest']);
$app->router->post('/login', [UserController::class, 'auth'])->middleware(['guest']);
$app->router->get('/users', [UserController::class, 'index']);
$app->router->get('/posts', [PostController::class, 'index']);

$app->router->get('/post/(?P<slug>[a-z0-9-]+)', function () {
    return 'Post ' . get_route_param('slug', 'test');
});

$app->router->get('/contact', [ContactController::class, 'index']);
$app->router->get('/', [HomeController::class, 'index']);

// return dump(__FILE__ . __LINE__, $app->router->getRoutes());