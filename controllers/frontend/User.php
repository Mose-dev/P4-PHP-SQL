<?php

class User //Adhérants.
{
//Inscription.
     public function inscription()
     {
          $title = "Inscription";
          if(isset($_POST) && !empty($_POST))
          {
               $userManager = new UserManager;
               $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
               $checkForm = false;
               $errorMessages = [];
               
               $checkName = preg_match("/^\pL+$/u", strip_tags($_POST["name"]));
               if ($checkName == true) 
               {
                    $checkForm = true;
               }
               else 
               {
                    array_push($errorMessages,"Format du nom invalide");
               }
               
               if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
               {
                    
                    if($checkForm!= false) 
                    {
                         $checkForm = true;
                    }
               }
               else 
               {
                    $checkForm = false;
                     array_push($errorMessages,"Adresse e-mail invalide");
               }
               
               if ($checkForm == true) 
               {
                    $userManager->addUser(strip_tags($_POST["name"]),filter_var($_POST['email'], FILTER_VALIDATE_EMAIL), $password); 
                     header('location: index.php?action=home');   
               }
               else 
               {
                    $_SESSION["error"] = $errorMessages;
                     header('location: index.php?action=inscription');   
               }
          }
          else 
          {
               require('views/frontend/inscription.php');
          }
     }
//Liste des adhérants ( dashboard ).
     public function getUsers()
     {
          $title = "Liste des adhérants";
          $userManager = new UserManager;
          $getUsers = $userManager->getUsers();
          require('views/backend/getUsers.php');
     }
//Eliminer un adhérant.
     public function deleteUser()
     {
          if(isset($_GET['id']) && !empty($_GET['id'])) 
          { 
               $userManager = new UserManager;
               $deleteUser = $userManager->deleteUser($_GET['id']);
               header('location: index.php?action=getUsers');
          }
     }
}