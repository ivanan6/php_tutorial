<?php


$url = parse_url ($_SERVER['REQUEST_URI'])['path'];



$routes = 
[
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function abourt($code = 404){
    http_response_code($code);
    require "views/{$code}.php";
    // exit;
    die();
}

function routeToController($url, $routes){
    if(array_key_exists($url, $routes)){
        require $routes[$url];
    }else{
        abourt();
    }
}

routeToController($url, $routes);



?>