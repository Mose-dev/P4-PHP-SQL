<?php


require 'Manager.php';

class UserManager extends Manager{

     public function addUser($name, $email, $password)
     {
          $request = Manager::connexion()->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
          $request->execute([$name, $email, $password]);
     }
     public function getUserByEmail($email)
     {
          $request = Manager::connexion()->prepare('SELECT * FROM users WHERE email = ?');
          $request->execute([$email]);

          return $request->fetch();
     }
}