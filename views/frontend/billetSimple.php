<?php require 'views/includes/head.php'; ?>
<?php require 'views/includes/menu.php'; ?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5">
                    <h1 class="font-weight-bold text-white mt-3">Billet simple pour l'Alaska</h1>
                    <h2 class="mt-5 font-weight-bold"> 
                         Retrouvez l'ensemble des chapitres de mon nouveau roman
                    </h2> 
               </div>
          </div>
     </div>
</div>
<!--Retour administrateur-->
<div class="postContainer contain">
     <?php if(isset($_SESSION['admin'])): ?>
          <a href="index.php?action=dashboard" class="btn btn-success font-weight-bold border-white">Aller au dashboard</a>
     <?php endif; ?>
</div>
<!--Affichage des billets-->
<div class="container">
     <div class="row mt-2">
          <div class="col mb-1">
               <div class="card bg-transparent border-0">
                    <div class="card-body" id="background">
                         <div class="card-text">
                              <h3 class="card-title text-center font-weight-bold">Le résumé</h3>
                              <p class="card-text font-weight-bold">
                                   Trois amis décident de visiter l'Alaska en plein hiver Canadien. 
                                   Ayant vraiment pensé à une préparation en conséquence, ils vont pourtant 
                                   vivre une aventure hors du commun.
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-body">
                         <?php if(!empty($postBillet) && isset($postBillet)): ?>
                                   <?php foreach($postBillet as $postNew): ?>
                                        <ul class="list-unstyled">
                                             <div class="d-flex justify-content-end">
                                                  <li id="link"><a class="btn" href="index.php?action=commentText&id=<?= $postNew['id'] ?>"><i class="fas fa-book-open"></i>Lire</a></li> 
                                             </div>
                                             <li class="text-left">Publié le <?= date("d/m/Y à H:i:s",strtotime($postNew['creation_date'])) ?></li>
                                             <li class="text-center"><h4 class="font-weight-bold"><?= $postNew['title'] ?></h4></li>
                                             <p> <?= mb_strimwidth($postNew['mytextarea'], 0, 250, "...") ?></p>
                                        </ul>
                                        <hr>
                                   <?php endforeach; ?>
                         <?php else: ?>
                              <?= 'Aucun billet posté.'; ?>
                         <?php  endif; ?>
                    </div>
               </div>
          </div> 
     </div>
</div>
                    
<?php require 'views/includes/footer.php'; ?>