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
//Effacer un billet.
     public function deleteBillet()
     {
          $postManager = new PostManager;
          if(isset($_GET['id']))
          { 
               $delete = $postManager->deleteBillet($_GET['id']);
          }
          header('location: index.php?action=dashboard');
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
               header('location: index.php?action=billetSimple');
          }
          else
          {
               header('location: index.php?action=billetSimple');
          }
     }
}