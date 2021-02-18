<?php
require 'Manager.php';

class UserManager extends Manager{
//Incription d'un adhérant.
     public function addUser($name, $email, $password)
     {
          $request = Manager::connexion()->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
          $request->execute([$name, $email, $password]);
     }
//Connexion adhérant.
     public function getUserByEmail($email)
     {
          $request = Manager::connexion()->prepare('SELECT * FROM users WHERE email = ?');
          $request->execute([$email]);

          return $request->fetch();
     }
//Liste des adhérants ( dashboard ).
     public function getUsers()
     {
          $request = Manager::connexion()->prepare('SELECT * FROM users');
          $request->execute();

          return $request->fetchAll();
     }
//Eliminer un adhérant
     public function deleteUser($id)
     {
          $request = Manager::connexion()->prepare('DELETE FROM users WHERE id= ?');
          $request->execute([$id]);
     }        
}