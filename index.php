<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('dashboard', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('FileNotFound', 'ErrorController');
/* Router::post('login', 'SecurityController');
Router::post('addProject', 'ProjectController'); */

Router::run($path);