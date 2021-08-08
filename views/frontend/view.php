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
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-0">
                    <h1 class="font-weight-bold text-white mt-4">Bienvenue sur le site officiel de Jean Forteroche</h1>
                    <h2 class="snow mt-5"> 
                         Billet simple pour l'Alaska<br />
                         Suivez mon nouveau roman en ligne et participez-y ! 
                    </h2> 
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col">
               <div class="card bg-transparent border-0">
                    <div class="card-body text-center">
                         <button class="button font-weight-bold mx-1"><a href=#ancre class="text-dark text-decoration-none">Découvrir mon projet</a></button> 
                         <button class="button font-weight-bold mx-1"><a href="index.php?action=billetSimple" class="text-dark text-decoration-none">Lire les chapitres</a></button>
                    </div>
               </div>
          </div>
     </div>
</div>
<!--Retour administrateur-->
<?php if(isset($_SESSION['admin'])): ?>
<div class="postContainer contain">
     <p><a href="index.php?action=dashboard" class="btn btn-success font-weight-bold border-white">Aller au dashboard</a></p>
</div>
<?php endif; ?>  
<!--Container de la page d'accueil-->
<div class="container mt-5 p-4" id="background">
     <div class="row" id="ancre">
          <div class="col col-12 col-lg-4">
               <div class="card">
                    <img class="card-img-top"src="assets/images/livre.jpg" alt="Un livre digital" />
               </div>
          </div> 
          <div class="col col-12 col-lg-8">
               <div class="card border shadow">
                    <div class="card-body">
                       <h5 class="card-title">BILLET SIMPLE POUR L'ALASKA : Mon nouveau roman en ligne</h5>
                       <p class="card-text">Encore une fois Jean Forteroche innove ( comme toujours et vous n'êtes pas surpris ! )
                         en proposant à ses fidèles lecteurs de suivre son nouveau roman en ligne. 
                         Sous la forme de chapitres périodiques et interactifs, votre idole prend le pari 
                         d'établir une communication bilatérale avec vous qu'empêche le support papier.
                         Ce nouveau roman est offert à vous, ma communauté d'indéfectibles lecteurs qui
                         s'est constituée au fil des passionnantes histoires dont seul Jean Forteroche
                         détient le secret. Une grande opportunité pour faire entendre votre voix,
                         et pour vous récompenser de votre fidelité.</p>
                    </div>
               </div>
          </div>
     </div>
     <div class="row mt-3 ">
          <div class="col col-12 col-lg-4">
               <div class="card">
                    <img  class="card-img-top" src="assets/images/telephone.jpg" alt="Des téléphones portables"/>
               </div>
          </div> 
          <div class="col col-12 col-lg-8">
               <div class="card border shadow">
                    <div class="card-body">
                         <h5 class="card-title">BILLET SIMPLE POUR L'ALASKA  : Interagissez avec moi</h5>
                         <p class="card-text">Toute publication périodique qui composera le roman "Billet simple pour l'Alaska" sera l'opportunité de
                         vous faire entendre. Exprimez vous de façon pertinente sur la progression de l'épisode et réagissez sur
                         les décisions des personnages. Proposez vos interprétations, faites basculer l'histoire, échangez vos
                         idées. Au gré de la congruence de votre commentaire, Jean Forteroche vous répondra personnellement.
                         Et pour le meilleur d'entre vous, pourquoi pas un prochain roman en binôme.</p>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php require 'views/includes/footer.php'; ?>