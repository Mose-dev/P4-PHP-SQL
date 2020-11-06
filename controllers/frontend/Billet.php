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
          $postBillet = $PostManager->getOneBillet($_GET['id']);
         // var_dump($postBillet);
          //die;
          require('views/frontend/commentText.php');
     }
     
}