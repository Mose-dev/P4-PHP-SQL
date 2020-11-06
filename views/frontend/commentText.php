<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>
<!--Header-->
<header>
     <h1>Billet simple pour l'Alaska</h1>
</header>
<!--Introduction-->
<section>
     <h2 class="introduction"><?= $postBillet[0]['title']?> </h2>
</section>
<section class="commentText">
     <h3 class="storyDate">Publié le <?= date("d/m/Y à H:i:s",strtotime($postBillet[0]['creation_date'])) ?></h3>
          <p class="story">
               <?= $postBillet[0]['mytextarea']?>
          </p>
          
</section>
<section class="commentStory">
     <h4 class="commentUsersTitle">Commentaires</h4>

     <div class="commentUser">
          <?php if (!empty($postBillet) && isset($postBillet)): ?>
                    <?php foreach($postBillet as $postUser): ?>
                         <ul class="commentBillet">
                              <li class="postDate">Publié le <?= date("d/m/Y à H:i:s",strtotime($postUser['comment_date'])) ?></li>
                              <li class="postAuthor"><?= strip_tags($postUser['author']) ?></li>
                              <li class="postContent"><?= strip_tags($postUser['comment']) ?></li>
                              <div class="linkReport">
                                   <li id="linkPost"><a href="index.php?action=commentText&id=<?= $postUser['post_id']?>" class="linkPost">Signaler</a></li> 
                              </div>    
                         </ul>
                         <hr>
                    <?php endforeach; ?>
          <?php else: ?>
               <?= 'Aucun billet posté.';?>
          <?php  endif;?>
     </div>
</section>
<section class="postComments"> 
     <h4 class="postCommentsTitle">Laissez votre commentaire</h4> 
          <form action="index.php?action=addComment" method="post" class="formCommentsUsers">
               <input type="text" name="post_id" value="<?= $postBillet[0]['post_id']?>">
               <label for="author">Votre pseudo</label>
               <p><input type="text" name="author" id="author"></p>
               <label for="comment">Votre commentaire</label>
               <p><textarea class="textSize" name="comment" row="8" col="45" id="comment"></textarea>
               <button type="submit">Envoyer</button>
          </form>
</section>
<?php
require 'views/includes/footer.php';
?>
