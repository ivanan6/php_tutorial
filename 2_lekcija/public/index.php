<?php

use Core\Session;
use Core\ValidationException;




const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'vendor/autoload.php';
session_start();
require BASE_PATH . 'Core/functions.php';
// manuelno deklarisemo kako da importujemo klase koje nisu jos manuelno/eksplicitno deklarisane
// spl_autoload_register(function ($class) {
//     //Core\Databse

//     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
//     require base_path("{$class}.php");
// });

require BASE_PATH . 'vendor/autoload.php';

require base_path('bootstrap.php');

$router = new \Core\Router();
$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->getErrors());
    Session::flash('old', $exception->getOld());

    return redirect($router->previousUrl());
}
Session::unflash();
