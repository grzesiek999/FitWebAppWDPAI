<?php

class User {
    private $email;
    private $password;
    private $name;
    private $surname;
    private $birthDate;

    public function __construct(string $email, string $password, string $name, string $surname, string $birthDate) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->birthDate = $birthDate;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setSurname(string $surname) {
        $this->surname = $surname;
    }

    public function setBirthDate(string $birthDate) {
        $this->birthDate = $birthDate;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getBirthDate(): string {
        return $this->birthDate;
    }
}