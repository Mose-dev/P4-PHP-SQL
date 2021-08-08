<?php
require 'Manager.php';

class PostManager extends Manager
{
//Gestion des billets.

//Ajouter un billet.
      public function addBillet($title, $mytextarea)
     {
          $request = Manager::connexion()->prepare('INSERT INTO posts (title, mytextarea, creation_date) VALUES (?, ?, NOW())');
          $request->execute([$title, $mytextarea]);
         
     }
//Corriger un billet.
     public function correctBillet($id, $title, $mytextarea)
     {
          $request = Manager::connexion()->prepare('UPDATE posts SET title= ?, mytextarea= ? WHERE id= ?');
          $request->execute([$title, $mytextarea, $id]);
     }
//Retourner un billet.
     public function returnBillet($id)
     {
          $request = Manager::connexion()->prepare('SELECT title, mytextarea FROM posts Where id= ?');
          $request->execute([$id]);

          return $request->fetch();
     }
//Afficher un billet
     public function postBillet()
     {
          $request = Manager::connexion()->prepare('SELECT * FROM posts');
          $request->execute();

          return $request->fetchAll();
     }
     public function getOneBillet($id)
//Jointure entre table pour affichage du billet.
     {
          $request = Manager::connexion()->prepare("SELECT *, p.id AS postId FROM posts AS p LEFT JOIN comments ON comments.post_id= p.id WHERE p.id= $id ORDER BY comments.comment_date DESC");
          $request->execute();
          $request->setFetchMode(PDO::FETCH_CLASS, 'posts');

          return $request->fetchAll();
     }
//Commenter un billet.
     public function commentBillet($post_id, $author, $comment)
     {
          $request = Manager::connexion()->prepare('INSERT INTO comments (post_id, author, comment , comment_date, report) VALUES (?, ?, ?, NOW(), ?)');
          $request->execute([$post_id, $author, $comment, 0]);
         
     }
//Effacer un billet.
public function deleteBillet($id)
{
     $request = Manager::connexion()->prepare('DELETE FROM posts WHERE id= ?');
     $request->execute([$id]);
}

//Commentaires.

//Afficher le commentaire.
     public function getOneComment($post_id)
     {
          $request = Manager::connexion()->prepare('SELECT * FROM comments WHERE post_id= ? ORDER BY comment_date DESC');
          $request->execute([$post_id]);

          return $request->fetch();
     }
//Signaler un commentaire.
     public function report()
     {
          $request = Manager::connexion()->prepare('SELECT * FROM comments WHERE report= 1 ORDER BY comment_date ');
          $request->execute();

          return $request->fetchAll();
     }
//Inserer un message.
     public function messages( $firstname, $name, $email, $title, $content)
     {
          $request = Manager::connexion()->prepare('INSERT INTO messages ( firstname, name , email, title, content ) VALUES (?, ?, ?, ?, ? )');
          $request->execute([$firstname, $name, $email, $title, $content]);
         
     }
//Consulter les messages.
     public function getMessages()
     {
          $request = Manager::connexion()->prepare('SELECT * FROM messages ORDER BY date_creation DESC');
          $request->execute();

          return $request->fetchAll();
     }
//Effacer un message.
     public function deleteMessages($id)
     {
          $request = Manager::connexion()->prepare('DELETE FROM messages WHERE id= ?');
          $request->execute([$id]);
     }
}