<?php require 'views/includes/head.php'; ?>
<?php require 'views/includes/menu.php'; ?>

<!--Message flash-->
<div class="postContainer contain">
     <?php if(isset($_SESSION['error_message'])): ?> 
               <div class="alert-explode alert alert-success w-100 text-center bg-success text-white border-light" role="alert"<?= $_SESSION['error_message']['type'] ?>>
                    <?= $_SESSION['error_message']['message']; ?>
               </div>
          <?php endif; ?>
     <?php unset($_SESSION['error_message']) ?>
</div>   
<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col ">
               <div class="jumbotron bg-transparent mt-5 pb-1">
                    <h1 class="font-weight-bold text-white mt-3">Billet simple pour l'Alaska</h1>
                    <h2 class="mt-5 mb-0 font-weight-bold">
                         <?= $postBillet[0]['title'] ?>
                    </h2> 
               </div>
          </div>
     </div>
</div>
<!--Affichage des billets-->
<div class="container mt-0">
     <div class="row">
          <div class="col p-3">
               <div class="card p-4">
               <!--Boutons correction et élimination des billets Admin-->
               <?php if(isset($_SESSION['admin'])): ?>
                    <div class="text-right">
                         <a class="btn btn-success font-weight-bold mx-2" href="index.php?action=correctBillet&id=<?= $postBillet[0]['postId'] ?>"></i>Corriger</a> 
                         <a class="btn btn-danger font-weight-bold" href="index.php?action=deleteBillet&id=<?= $postBillet[0]['postId'] ?>"></i>Retirer</a>
                    </div>
               <?php endif; ?> 
                    <div class="card-body"> 
                         <h3 class="card-title font-weight-bold mb-2">
                              Publié le <?= date("d/m/Y à H:i:s",strtotime($postBillet[0]['creation_date'])) ?>
                         </h3>
                         <p class="card-text">
                              <?= $postBillet[0]['mytextarea'] ?>
                         </p>
                    </div>
               </div>
          </div>
     </div>
</div>
<!--Bouton de retour au dashbord Admin-->
<div class="postContainer contain">
     <?php if(isset($_SESSION['admin'])): ?>
          <p><a href="index.php?action=dashboard" class="btn btn-success font-weight-bold border-white mt-3">Retour au dashboard</a></p>
     <?php endif; ?>
</div>
<!--Affichage commentaires du billet-->
<div class="container p-5" id="background">
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-body">
                         <h4 class="card-title font-weight-bold mb-2 text-center"> 
                              Commentaires
                         </h4>
                         <div class="card-text">
                              <?php if (!empty($postBillet) && isset($postBillet)): ?>
                                   <?php foreach($postBillet as $postComment): ?>
                                        <ul class="list-unstyled">
                                             <li class="font-weight-bold">Publié le<?= date("d/m/Y à H:i:s",strtotime($postComment['comment_date'])) ?></li>
                                             <li class="text-center font-weight-bold m-2"><?= strip_tags($postComment['author']) ?></li>
                                             <li><?= strip_tags($postComment['comment']) ?></li>
                                             <?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])): ?>
                                                  <div class="text-right">
                                                       <li><a class="btn btn-danger font-weight-bold" href="index.php?action=reportComment&id=<?= $postComment['id'] ?>">Signaler</a></li> 
                                                  </div>    
                                             <?php endif; ?>
                                        </ul>
                                        <hr>
                                   <?php endforeach; ?>
                              <?php else: ?>
                                   <?= 'Aucun billet posté.'; ?>
                              <?php  endif;?> 
                         </div>
                    </div>
               </div>
          </div>
     </div>
<!--Encart commentaires du billet-->
     <div class="row">
          <div class="col">
               <div class="card mt-2">
                    <div class="card-body">
                         <h4 class="card-title font-weight-bold mb-2 text-center"> 
                              Laissez votre commentaire
                         </h4>
                         <form action="index.php?action=addComment" method="post" class="text-center">
                              <?php if(isset($_SESSION['user']) || isset($_SESSION['admin'])): ?>
                                        <div class="form-group text-center">
                                             <input type="hidden" name="post_id" value="<?= $postBillet[0]['postId'] ?>">
                                        </div>
                                        <div class="form-group">
                                             <label for="author">Votre pseudo</label>
                                             <input type="text" class="form-control w-50 m-auto" name="author" id="author">
                                        </div>
                                        <div class="form-group">
                                             <label for="comment">Votre commentaire</label>
                                             <textarea class="form-control" name="comment" row="8" col="45" id="comment"></textarea>
                                        </div>
                                             <button type="submit" class="btn" id="btn-on">Envoyer</button>
                              <?php else: ?>
                                   <div class="connect2 text-center font-weight-bold">
                                        <h5 class="text-white">Pour laisser votre commentaire veuillez</h5>
                                        <a href="index.php?action=connexion" class="btn btn-light my-2">Vous connecter</a>
                                        <a href="index.php?action=inscription" class="btn btn-light my-2">Vous inscrire</a>
                                   </div>
                              <?php endif; ?> 
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php require 'views/includes/footer.php'; ?>
