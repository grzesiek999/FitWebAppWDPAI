<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController {
    public function login() {
        $user = new User('grzegorz.pasich@o2.pl', 'admin', 'Grzesiek', 'Pasich');


        if(!$this->isPost()) {
            return $this->render('LoginPage');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($user->getEmail() !== $email) {
            return $this->render('LoginPage', ['messages' => ['User with this email not exist !']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('LoginPage', ['messages' => ['Wrong password !']]);
        }

        return $this->render('HomePage');
    }
}