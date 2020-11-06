<?php
//require_once './models/userManager.php';

class User 
{
     public function inscription()
     {
          if(isset($_POST) && !empty($_POST))
          {
               $userManager = new UserManager;
               $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
               $checkForm = false;
               $errorMessages = [];
               
               $checkName = preg_match('#^[a-zA-Z\sà\-]#',$_POST["name"]);
               if ($checkName == true) 
               {
                    $checkForm = true;
               }
               else 
               {
                    array_push($errorMessages,"Le nom n'est pas valide");
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
                     array_push($errorMessages,"Adresse non valide");
               }
               
               if ($checkForm == true) 
               {
                    $userManager->addUser($_POST["name"],$_POST["email"],$password); 
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
}