<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>
<!--Header-->
<header>
     <h1>Billet simple pour l'Alaska</h1>
</header>
<!--Introduction-->

<section class="commentStory">
     <h4 class="commentUsersTitle">Commentaires</h4>
</section>
<section class="commentUser">
<?php if (!empty($postBillet) && isset($postBillet)): ?>
                    <?php foreach($postBillet as $postUser): ?>
                         <ul class="postBillet">
                              <li>Publié le <?= date("d/m/Y à H:i:s",strtotime($postUser['comment_date'])) ?></li>
                              <li class="postTitle"><?= $postUser['author'] ?></li>
                              <li class="postContent"><?= $postUser['comment'] ?></li>
                              <li id="link"><a href="index.php?action=commentText&id=<?= $postUser['post_id']?>"class="link" ><i class="fas fa-book-open"></i> Lire</a></li> 
                         </ul>
                    <?php endforeach; ?> 
          <?php else: ?>
               <?= 'Aucun billet posté.';?>
          <?php  endif;?>
</section>
<section class="postComments"> 
     <h4 class="postCommentsTitle">Laissez votre commentaire</h4> 
          <form action="index.php?action=addComment" method="post" class="formCommentsUsers">
               <label for="author">Votre pseudo</label>
               <p><input type="text" name="author" id="author"></p>
               <label for="comment">Votre commentaire</label>
               <p><textarea class="textSize" name="comment" row="8" col="45" id="comment"></textarea>
               <button type="submit">Envoyer</button>
          </form>
</section>