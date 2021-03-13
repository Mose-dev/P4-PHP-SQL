<?php

class Messages //Gestion des messages.
{
//Formulaire de contact
     public function postMessages()
     {
          if(isset($_POST) && !empty($_POST))
          {
               $postManager = new PostManager;
               $checkForm = false;
               $errorMessages = [];
               
               $checkName = preg_match("/^\pL+$/u", strip_tags($_POST["firstname"]));
               if ($checkName == true) 
               {
                    $checkForm = true;
               }
               else 
               {
                    array_push($errorMessages,"Format du prenom invalide");
               }
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
                    $postManager->messages(strip_tags($_POST['firstname']), strip_tags($_POST['name']), strip_tags($_POST['email']),strip_tags($_POST['title']), strip_tags($_POST['content']));
                     header('location: index.php?action=home');   
               }
               else 
               {
                    $_SESSION["error"] = $errorMessages;
                     header('location: index.php?action=contact');   
               }
          }
          else 
          {
               require('views/frontend/contact.php');
          }
     }
}