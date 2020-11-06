<?php
require 'Manager.php';

class PostManager extends Manager
{
      public function addBillet($title, $mytextarea)
     {
          $request = Manager::connexion()->prepare('INSERT INTO posts (title, mytextarea, creation_date) VALUES (?, ?, NOW())');
          $request->execute([$title, $mytextarea]);
         
     }
     public function postBillet()
     {
          $request = Manager::connexion()->prepare('SELECT * FROM posts');
          $request->execute();

          return $request->fetchAll();
     }
     public function getOneBillet($id)
     {
          $request = Manager::connexion()->prepare("SELECT *, p.id AS postId FROM posts AS p  LEFT JOIN comments  ON  comments.post_id = p.id WHERE p.id= $id");
          $request->execute();
          $request->setFetchMode(PDO::FETCH_CLASS, 'posts');

          return $request->fetchAll();
     }
     public function commentBillet($post_id, $author, $comment)
     {
          $request = Manager::connexion()->prepare('INSERT INTO comments (post_id, author, comment , comment_date) VALUES (?, ?, ?, NOW())');
          $request->execute([$post_id, $author, $comment]);
         
     }
     public function getOneComment($post_id)
     {
          $request = Manager::connexion()->prepare('SELECT * FROM comments WHERE post_id= ? ORDER BY comment_date DESC');
          $request->execute([$post_id]);

          return $request->fetch();
     }
     

     

     
}