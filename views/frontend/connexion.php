<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5 pb-1">
                    <h1 class="font-weight-bold text-white mt-3">Billet simple pour l'Alaska</h1>
                    <h2 class="mt-5 font-weight-bold"> 
                         Se connecter
                    </h2> 
               </div>
          </div>
     </div>
</div>    
<!--Formulaire de connexion-->
<div class="container text-center" id="containerwidth">
     <div class="row">
          <div class="col ">
               <div class="card">
                    <div class="card-body" id="background">
                         <?php if(isset($_SESSION["error"])): ?>
                              <p class="font-weight-bold text-danger list-unstyled"><?= $_SESSION["error"] ?></p>     
                         <?php endif; ?> 
                         <form action="index.php?action=connexion" method="post">
                         <div class="form-group">
                                   <label for="name" class="font-weight-bold">Votre nom</label>
                                   <input class="form-control" type="text" placeholder="Nom" name="name" id="name" required>
                              </div>
                              <div class="form-group">
                                   <label for="email" class="font-weight-bold">Votre email</label>
                              <input class="form-control" type="text" placeholder="email" name="email" id="email" required>
                              </div> 
                               <div  class="form-group">       
                                   <label for="password" class="font-weight-bold">Mot de passe</label>
                                   <input class="form-control" type="password" placeholder="mot de passe"name="password" id="password" required >
                              </div>
                                   <button type="submit" class="btn btn-light">Connexion</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php unset($_SESSION["error"]); ?>  

     
