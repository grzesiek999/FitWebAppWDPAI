<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('homepage', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('articles', 'DefaultController');
Routing::get('diets', 'DefaultController');
Routing::get('bmiCalculator', 'DefaultController');
Routing::get('information', 'DefaultController');
Routing::get('createAccount', 'DefaultController');

Routing::run($path);