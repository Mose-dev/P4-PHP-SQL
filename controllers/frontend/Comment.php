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

}