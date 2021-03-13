<?php
class Connexion //Fonctions de connexion/deconnexion et accès au dashboard.
{
     public function login()
     {
          $title = "Connexion";
          if(!empty($_POST['email']) && !empty($_POST['password']))
          {
               $userManager = new UserManager;
               $user = $userManager->getUserByEmail($_POST['email']);
               if($user == false)
               {
                    $_SESSION["error"] = "Email ou mot de passe invalide";
                    header('location: index.php?action=connexion');
               }
               else 
               {
                    if(password_verify($_POST['password'], $user['password']) == true)
                    {
                         if($user['role'] == 0)
                         {
                              $_SESSION['user'] = $user['id'];
                              header('location: index.php?action=billetSimple');
                         }
                         else
                         { 
                              $_SESSION['admin'] = $user['id'] ;
                              header('location: index.php?action=dashboard');
                         }
                    }
                    else
                    {
                         $_SESSION["error"] = "Mot de passe invalide";
                         header('location: index.php?action=connexion');
                    }
               } 
          }
          else 
          {
               require('views/frontend/connexion.php');
          }
     }
     public function deconnexion()
     {
          unset($_SESSION['user']);
          unset($_SESSION['admin']);
          header('location: index.php?action=home');
     }
}


