<?php

class Manager {

     protected static function connexion(){

          $db_host = 'localhost:8889';
          $db_name = 'test';
          $db_user = 'root';
          $db_password = 'root';

          $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_password,
               array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
               )
          );

          return $db;
     }
}    