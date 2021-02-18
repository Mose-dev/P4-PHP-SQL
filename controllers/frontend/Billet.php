<?php
class Billet //Gestion des billets.
{
//Affichage des billets.
     public function billetSimple()
     {
          $title = "Billet simple";
          $PostManager = new PostManager;
          $postBillet = $PostManager->postBillet();
          require('views/frontend/billetSimple.php');
     }
//Commentaires des billets.
     public function commentStory()
     {
          $title = "Commentaires";
          $PostManager = new PostManager;
               if((int) $_GET['id']) 
               {
                    $postBillet = $PostManager->getOneBillet($_GET['id']);
               }
               else 
               {
                   header ('location : index.php?action=home'); 
               }
               if($postBillet == null)
               {
                    header ('location : index.php?action=home'); 
               }
               else
               {
                    require('views/frontend/commentText.php');  
               }
     }
//Commentaires signalés.
     public function reportComment()
     {
          $PostManager = new PostManager;
          $postBillet = $PostManager->report();
          require('views/backend/report.php');
     }
}