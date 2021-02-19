<?php

class Page
{
     public function home()
     {
          $title = "Accueil";
          require('views/frontend/view.php');
     }
     
     public function contact()
     {
          $title = "Contact";
          require('views/frontend/contact.php');
     }
     public function biographie()
     {
          $title = "Biographie";
          require('views/frontend/biographie.php');
     }
     
}