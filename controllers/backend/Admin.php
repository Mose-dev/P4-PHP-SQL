<?php
class Admin //Fonctions de connexion/deconnexion et accès au dashboard.
{
public function __construct()
     {
          if(!isset($_SESSION['admin']))
          {
               header('location: index.php?action=home');
          }
     }
     public function dashboard()
     {
          $title = "Dashboard";
          
          require('views/backend/dashboard.php');
     }
//Affichage des commentaires signalés ( dashboard ).
     public function getReport()
     {
          $title = "Commentaires signalés";
          $commentManager = new CommentManager;
          $getComment = $commentManager->getReportComment();
          require('views/backend/getReport.php');
     }
//Conserver un commentaire signalé.
     public function keepReport()
     {
          if(isset($_GET['id']) && !empty($_GET['id']))
          {
               $commentManager = new CommentManager;
               $keep = $commentManager->keepReport($_GET['id']);
               $_SESSION['error_message'] = array(
                    "message" => 'Commentaire conservé',
                    "type"    => 'success'
               );
               header('location: index.php?action=report');
          } 
     }
//Eliminer un commentaire signalé.
     public function deleteReport()
     {
          $commentManager = new CommentManager;
          $deleteComment = $commentManager->deleteComment($_GET['id']);
          $_SESSION['error_message'] = array(
               "message" => 'Commentaire supprimé',
               "type"    => 'danger'
          );
          header('location: index.php?action=report');
     }
//Liste des adhérants ( dashboard ).
     public function getUsers()
     {
          $title = "Liste des adhérants";
          $userManager = new UserManager;
          $getUsers = $userManager->getUsers();
          require('views/backend/getUsers.php');
     }
//Eliminer un adhérant.
     public function deleteUser()
     {
          if(isset($_GET['id']) && !empty($_GET['id'])) 
          { 
               $userManager = new UserManager;
               $deleteUser = $userManager->deleteUser($_GET['id']);
               header('location: index.php?action=getUsers');
          }
     }
//Consultation des messages.
     public function getMessages()
     {
          $title = "Messages";
          $postManager = new PostManager;
          $messages = $postManager->getMessages();
          require('views/backend/messages.php'); 
     }
//Effacer un message.
     public function deleteMessages()
     {
          if(isset($_GET['id']) && !empty($_GET['id'])) 
          { 
               $postManager = new PostManager;
               $deleteMessages = $postManager->deleteMessages($_GET['id']);
               header('location: index.php?action=getmessages');
          }
     }
     
}


