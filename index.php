<?php

require_once __DIR__."/src/controllers/DefaultController.php";

$path = $_SERVER["REQUEST_URI"];
$path = trim($path, "/");

$actions = explode("/", $path);


#echo 'Hi there 👋';
#echo $path;

#var_dump($actions);

/* if($actions[0] === 'dashboard'){ # === sprawdza dodatkowo typ
    include 'src/views/dashboard.html';
} 
else {
    include 'src/views/login.html';
} */

$routes = [
    "login" => "DefaultController",
    "dashboard" => "DefaultController"
];

if(!array_key_exists($actions[0], $routes)){
    die("404 not found"); #strona błędu powinna być
}

#$controller = new DefaultController();

$controller = new $routes[$actions[0]];


$action = $actions[0];
$controller->$action();