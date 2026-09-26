<?php
session_start();

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../models/User.php';

$router = new Router();

$router->add('GET', '/', 'AuthController', 'index');
$router->add('GET', '/login', 'AuthController', 'loginForm');
$router->add('POST', '/login', 'AuthController', 'login');
$router->add('GET', '/reg', 'AuthController', 'registerForm');
$router->add('POST', '/reg', 'AuthController', 'register');
$router->add('GET', '/logout', 'AuthController', 'logout');
$router->add('GET', '/user', 'AuthController', 'show');

$router->dispatch();
