<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>
<!--Header-->
<header>
<h1>Billet simple pour l'Alaska</h1>
</header>
<!--Introduction-->
<section>
<h2 class="introduction">Retrouvez l'ensemble des chapitres de mon nouveau roman </h2>
</section>

<section class="postContainer">
     <div class="summary" >
          <h3 class="summaryTitle">Le résumé</h3>
          <p>Trois amis décident de visiter l'Alaska en plein hiver Canadien. Ayant vraiment pensé à une préparation en conséquence, ils vont pourtant vivre une aventure hors du commun.</p>
     </div>
          
          <?php if (!empty($postBillet) && isset($postBillet)): ?>
                    <?php foreach($postBillet as $postNew): ?>
                         <ul class="postBillet">
                              <li>Publié le <?= date("d/m/Y à H:i:s",strtotime($postNew['creation_date'])) ?></li>
                              <li class="postTitle"><?= $postNew['title'] ?></li>
                              <li class="postContent"><?= $postNew['mytextarea'] ?></li>
                              <div class="book">
                                   <li id="link"><a href="index.php?action=commentText&id=<?= $postNew['id']?>" class="link" ><i class="fas fa-book-open"></i> Lire</a></li> 
                              </div>
                         </ul>
                    <?php endforeach; ?>
          <?php else: ?>
               <?= 'Aucun billet posté.';?>
          <?php  endif;?>
</section>
               
     <?php
          require 'views/includes/footer.php';
     ?>