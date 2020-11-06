<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>
<!--Header-->
     <header>
          <h1>Billet simple pour l'Alaska</h1>
     </header>
     <h2 id="connection">S'inscrire</h2>

     <?php if(isset($_SESSION['error'])): ?>
          <ul>
               <?php foreach($_SESSION['error'] as $message): ?>
                    <li><?= $message ?></li>   
               <?php endforeach; ?>
          </ul>
     <?php endif; ?>
     
<!--Formulaire d'inscription-->
     <div class="inscription_container">
          <form class="inscription" action="index.php?action=inscription" method="post">
               <input type="text" placeholder="nom" name="name">
               <input type="text" placeholder="email" name="email">
               <input type="password" placeholder="mot de passe"name="password">
               <button type="submit">Enregistrer</button>
          </form>
     </div>

     <?php
          require 'views/includes/footer.php';
     ?>
