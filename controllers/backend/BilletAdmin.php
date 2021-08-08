<?php

class BilletAdmin//Gestion des billets.
{
     public function __construct()
     {
          if(!isset($_SESSION['admin']))
          {
               header('location: index.php?action=home');   
          }
     }
//Ecrire un billet.     
     public function addBillet()
     {
          $title = "Ecrire un chapitre";
          if ($_POST)
          {
               if(!empty($_POST['title']) && !empty($_POST['mytextarea']))
               {
                    $postManager = new PostManager;
                    $postManager->addBillet($_POST['title'], $_POST['mytextarea']);
                    $_SESSION['error_message'] = array(
                         "message" => 'Nouveau chapitre affiché avec succés',
                         "type"    => 'success'
                    );
                    header('Location: index.php?action=billetSimple');  
               }
               else
               {
                    header('location: index.php?action=addBillet');
               }
          }
          else 
          {
               require('views/backend/addBillet.php');
          }
     }
//Eliminer un billet.
     public function deleteBillet()
     {
          $postManager = new PostManager;
          if(isset($_GET['id']))
          { 
               $delete = $postManager->deleteBillet($_GET['id']);
          }
          $_SESSION['error_message'] = array(
               "message" => 'Chapitre éliminé avec succés',
               "type"    => 'success'
          );
          header('location: index.php?action=billetSimple');
     }
//Editer un billet pour sa correction. 
     public function displayBillet()
     {
          $title = "Corriger un billet";
          $PostManager = new PostManager;
          $postBillet = $PostManager->returnBillet($_GET['id']);
          require('views/backend/correctBillet.php');
     } 
//Corriger un billet.      
     public function correctBillet()
     {
          $postManager = new PostManager;
          if(isset($_GET['id']))
          { 
               $postManager->correctBillet($_GET['id'],$_POST['title'], $_POST['mytextarea']);
               $_SESSION['error_message'] = array(
                    "message" => 'Chapitre corrigé avec succés',
                    "type"    => 'success'
               );
               header('location: index.php?action=billetSimple');
          }
          else
          {
               header('location: index.php?action=billetSimple');
          }
     }
}