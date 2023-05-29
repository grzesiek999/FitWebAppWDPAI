<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';


class UserRepository extends Repository {

    public function getUser(string $email): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE user_email = :email
            ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['user_email'],
            $user['user_password'],
            $user['user_name'],
            $user['user_surname'],
            $user['birth_date']
        );
    }

    public function addUser(User $user): void{
        $stmt = $this->database->connect()->prepare('
        INSERT INTO users (user_name, user_surname, birth_date, user_email, user_password)
        VALUES (?, ?, ?, ?, ?)
    ');

    $stmt->execute([
        $user->getName(),
        $user->getSurname(),
        $user->getBirthDate(),
        $user->getEmail(),
        $user->getPassword()
    ]);
    
    }
}