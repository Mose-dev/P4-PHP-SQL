<?php
//require_once 'models/userManager.php';

class Page
{
     public function home()
     {
          require('views/frontend/view.php');
     }
     
     public function contact()
     {
          require('views/frontend/contact.php');
     }
     public function biographie()
     {
          require('views/frontend/biographie.php');
     }
     
}