<?php
//require_once './models/userManager.php';

class Comment 
{
     public function addComment()
     {
                 // On teste si le formulaire a été soumis
           if ($_POST)
           {
                if(!empty($_POST['author']) && !empty($_POST['comment']))
                {
                     // On appelle le Post Manager
                     $postManager = new PostManager;
                     // On lance la fonction commentBillet du Post Manager
                     $postManager->commentBillet($_POST['post_id'], $_POST['author'], $_POST['comment']);
                     // On redirige l'utilisateur vers la page d'affichage des commentaires
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
     
     
}