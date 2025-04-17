<?php

require_once __DIR__ . '/controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = trim($uri, '/');
if ($route === '') {
    $route = 'home';
}

$viewPath = __DIR__ . '/views/';

switch ($route) {
    case 'home':
        $view = $viewPath . 'static/home.php';
        break;

    case 'register':
        AuthController::register();
        break;
    case 'users':
        AuthController::listUsers();
        break;
    default:
        $view = $viewPath . 'static/404.php';
        break;
}
