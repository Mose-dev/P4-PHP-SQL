<?php
require 'Manager.php';

class CommentManager extends Manager
{
//Signalement d'un commentaire.
     public function report($id)
     {
          $request = Manager::connexion()->prepare('UPDATE comments SET report= 1 WHERE id= ? ');
          $request->execute([$id]);
     }
//Conserver un commentaire.
     public function keepReport($id)
     {
          $request = Manager::connexion()->prepare('UPDATE comments SET report= 0 WHERE id= ? ');
          $request->execute([$id]);
     }
//Commentaire signalé.
     public function getReportComment()
     {
          $request = Manager::connexion()->prepare('SELECT id, author, comment, comment_date, report FROM comments WHERE report= 1');
          $request->execute();
          return $request->fetchAll();
     }
//Effacer un commentaire.
     public function deleteComment($id)
     {
          $request = Manager::connexion()->prepare('DELETE FROM comments WHERE id= ?');
          $request->execute([$id]);
     }

}