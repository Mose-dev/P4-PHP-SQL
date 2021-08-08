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

}