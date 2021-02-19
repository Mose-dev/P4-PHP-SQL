<?php
class Comment //Gestion des commentaires.
{
//Ajouter un commentaire.
     public function addComment()
     {
          if($_POST)
          {
               if(!empty(strip_tags($_POST['author'])) && !empty(strip_tags($_POST['comment'])))
               {
                     $postManager = new PostManager;
                     $postManager->commentBillet($_POST['post_id'], strip_tags($_POST['author']), strip_tags($_POST['comment']));
                     header('Location: index.php?action=commentText&id='.$_POST['post_id'] );  
               }
               else
               {
                     header('location: index.php?action=commentText&id='.$_POST['post_id']);
               }
          }
          else 
          {
               header('location: index.php?action=home');
          }
     }
//Signaler un commentaire.
     public function reportComment()
     {
          if(isset($_GET['id']) && !empty($_GET['id']))
          {
               $commentManager = new CommentManager;
               $commentManager->report($_GET['id']);
               header('location: index.php?action=home');
          } 
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
}