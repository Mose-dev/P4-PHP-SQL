<?php

class BilletAdmin 
{
     public function __construct()
     {
          if(!isset($_SESSION['admin']))
          {
               header('location: index.php?action=home');   
          }
     }
     
     public function addBillet()
     {
          // On teste si le formulaire a été soumis
          if ($_POST)
          {
               if(!empty($_POST['title']) && !empty($_POST['mytextarea']))
               {
                    // On appelle le Post Manager
                    $postManager = new PostManager;
                    // On lance la fonction addBillet du Post Manager qui insère dans la bdd.
                    $postManager->addBillet($_POST['title'], $_POST['mytextarea']);
                    // On redirige l'utilisateur vers la page d'affichage des billets
                    header('Location: index.php?action=billetSimple');  
               }
               else
               {
                    header('location: index.php?action=addBillet');
               }
          }
          else 
          {
               // On charge la vue du formulaire si le formulaire n'a pas été soumis
               require('views/backend/addBillet.php');
          }
     }
}