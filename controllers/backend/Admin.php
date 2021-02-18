<?php
class Admin //Fonctions de connexion/deconnexion et accès au dashboard.
{
     public function connexion()
     {
          $title = "Connexion";
          if(!empty($_POST['email']) && !empty($_POST['password']))
          {
               $userManager = new UserManager;
               $user = $userManager->getUserByEmail($_POST['email']);
               if($user == false)
               {
                    echo "Utilisateur inconnu";
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
                         echo 'Le mot de passe est incorrect';
                    }
               } 
          }
          else 
          {
               require('views/frontend/connexion.php');
          }
     }
     public function dashboard()
     {
          $title = "Dashboard";
          if(isset($_SESSION['admin'])) 
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
          unset($_SESSION['user']);
          unset($_SESSION['admin']);
          header('location: index.php?action=home');
     }
}


