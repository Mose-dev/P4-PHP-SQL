<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>
<!--Header-->
     <header>
          <h1>Billet simple pour l'Alaska</h1>
     </header>
     <h2 id="connection">Se connecter</h2>
     
<!--Formulaire de connexion-->
     <div class="inscription_container">
          <form class="inscription" action="index.php?action=connexion" method="post">
               <div class="emailContener">
                    <label for="email">Votre email :</label>
                    <input class="formConnect1" type="text" placeholder="email" name="email" id="email">
               </div> 
               <div  class="passwordContainer">       
                    <label for="password">Mot de passe :</label>
                    <input class="formConnect2"  type="password" placeholder="mot de passe"name="password" id="password">
               </div>
               <div class="submitConnect">
                    <button class="connectSubmit" type="submit">Connexion</button>
               </div>         
          </form>
     </div>

     
