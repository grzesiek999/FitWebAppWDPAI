<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function homepage()
    {
        $this->render('HomePage');
    }

    public function login()
    {
        $this->render('Login');
    }

    public function trainings()
    {
        $this->render('Trainings');
    }

    public function diets()
    {
        $this->render('Diets');
    }

    public function bmiCalculator()
    {
        $this->render('BmiCalculator');
    }

    public function information()
    {
        $this->render('Information');
    }

    public function createAccount()
    {
        $this->render('CreateAccount');
    }

    public function createAccountSuccessful()
    {
        $this->render('CreateAccountSuccessful');
    }

    public function passwordRestore()
    {
        $this->render('PasswordRestore');
    }
}