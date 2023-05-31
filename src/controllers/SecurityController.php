<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {
    public function login() {
        
        $userRepository = new UserRepository();

        if(!$this->isPost()) {
            return $this->render('LoginPage');
        }

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $user = $userRepository->getUser($email);

        if(!$user) {
            return $this->render('LoginPage', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('LoginPage', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('LoginPage', ['messages' => ['Wrong password!']]);
        }

        session_start();

        $_SESSION['username'] = $user->getName();

        return $this->render('HomePage');
    }

    public function register() {

        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('CreateAccount');
        }

        $user_name = $_POST['name'];
        $user_surname = $_POST['surname'];
        $birth_date = $_POST['date'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
        $confirmedPassword = $_POST['password-repeat'];
        

        if ($user_password !== $confirmedPassword) {
            return $this->render('CreateAccount', ['messages' => ['Podane hasła różnią się od siebie !']]);
        }

        $user = new User($user_email, md5($user_password), $user_name, $user_surname, $birth_date);
        
        $userRepository->addUser($user);

        return $this->render('CreateAccountSuccessful');
    }
}