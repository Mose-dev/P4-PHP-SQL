<?php
//require_once './models/userManager.php';

class Billet 
{
     public function billetSimple()
     {
          $PostManager = new PostManager;
          $postBillet = $PostManager->postBillet();
          require('views/frontend/billetSimple.php');
     }
     public function commentStory()
     {
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
     
}