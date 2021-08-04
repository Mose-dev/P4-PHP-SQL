<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5 pb-1">
                    <h1 class="font-weight-bold text-white mt-3">Billet simple pour l'Alaska</h1>
                    <h2 class="mt-5 font-weight-bold"> 
                         Contactez-moi
                    </h2>
               </div>
          </div>
     </div>
</div>    
<!--Formulaire de contact-->
<div class="container text-center">
     <div class="row">
          <div class="col ">
               <div class="card">
                    <div class="card-body" id="background">
                    <?php if(isset($_SESSION["error"])): ?>
                                   <ul class="pl-0 text-center">
                                        <?php foreach($_SESSION["error"] as $message): ?>
                                             <li class="font-weight-bold text-danger list-unstyled"><?= $message ?></li>     
                                        <?php endforeach; ?>
                                   </ul>
                              <?php endif; ?>
                         <form action="index.php?action=messages" method="post">
                              <div class="form-group">
                                   <label for="firstname" class="font-weight-bold">Votre prenom</label>
                                   <input class="form-control" type="text" placeholder="Prénom" name="firstname" id="firstname" required>
                              </div>
                              <div class="form-group">
                                   <label for="name" class="font-weight-bold">Votre nom</label>
                                   <input class="form-control" type="text" placeholder="Nom" name="name" id="name" required>
                              </div>
                              <div class="form-group">
                                   <label for="email" class="font-weight-bold">Votre adresse e-mail</label>
                                   <input class="form-control" type="text" placeholder="email" name="email" id="email" required>
                              </div> 
                              <div  class="form-group">       
                                   <label for="title" class="font-weight-bold">Objet du message</label>
                                   <input type="text" class="form-control" name="title" id="title" placeholder="Objet du message" required>
                              </div>
                              <div  class="form-group">       
                                   <label for="content" class="font-weight-bold">Votre message</label>
                                   <textarea class="form-control" name="content" id="content" placeholder="Votre message" required></textarea>
                              </div>
                              <button type="submit" class="btn btn-light">Contacter</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php unset($_SESSION["error"]); ?>     
<?php require 'views/includes/footer.php'; ?>