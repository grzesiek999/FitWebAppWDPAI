<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('homepage', 'DefaultController');
Routing::get('loginPage', 'DefaultController');
Routing::get('trainings', 'DefaultController');
Routing::get('diets', 'DefaultController');
Routing::get('bmiCalculator', 'DefaultController');
Routing::get('information', 'DefaultController');
Routing::get('createAccount', 'DefaultController');
Routing::get('createAccountSuccessful', 'DefaultController');
Routing::get('passwordRestore', 'DefaultController');

Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');

Routing::run($path);