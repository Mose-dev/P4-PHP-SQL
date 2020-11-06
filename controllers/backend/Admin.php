<?php
//require_once './models/userManager.php';

class Admin
{

     public function connexion()
     {
          if(!empty($_POST["email"]) && !empty($_POST["password"]))
          {
               $userManager = new UserManager;
               $user = $userManager->getUserByEmail($_POST["email"]);
               if($user == false)
               {
                    echo "Cet utilisateur n'existe pas";
               }
               else 
               {
                    if(password_verify($_POST["password"], $user["password"]) == true)//Vérification du mot de passe
                    {
                         $_SESSION['connexion'] = $user['id'];
                              header('location: index.php?action=dashboard');
                    }
                    else
                    {
                         echo 'Le mot de passe est incorrect';
                    }
               } 
          }
          else 
          {
          require('views/frontend/connexion.php');
          }
     }
     
     public function dashboard(){
          if(isset($_SESSION['connexion'])) 
          {
               require('views/backend/dashboard.php');
          }
          else 
          {
               header('location: index.php?action=home');
          }
     }
     
     public function deconnexion()
     {
          unset($_SESSION['connexion']);
          header('location: index.php?action=home');
     }
}


