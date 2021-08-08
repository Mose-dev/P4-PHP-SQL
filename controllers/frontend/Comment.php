<?php
class Comment //Gestion des commentaires.
{
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
//Ajouter un commentaire.
     public function addComment()
     {
          if($_POST)
          {
               if(!empty(strip_tags($_POST['author'])) && !empty(strip_tags($_POST['comment'])))
               {
                     $postManager = new PostManager;
                     $postManager->commentBillet($_POST['post_id'], strip_tags($_POST['author']), strip_tags($_POST['comment']));
                     $_SESSION['error_message'] = array(
                         "message" => 'Commentaire affiché avec succès',
                         "type"    => 'success'
                    );
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
               $_SESSION['error_message'] = array(
                    "message" => 'Commentaire signalé avec succès',
                    "type"    => 'success'
               );
               header('location: index.php?action=home');
          } 
     }
}