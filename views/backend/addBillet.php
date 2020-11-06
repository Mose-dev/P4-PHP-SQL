<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>

<div class="vue_form">
     <h1>Ecrivez votre chapitre</h1>
</div>

<!--Formulaire du billet-->
<div class="addBillet_container">
     <form action="index.php?action=addBillet" method="post">
          <div class="addBillet">
               <label for="title" class="text-title">Titre</label>
               <input type="text" class="form-title" name="title" id="title" />
          </div>
          <div class="contentBillet">
               <label for="mytextarea" class="text-content">Contenu</label><br />
               <textarea class="form-content" name="mytextarea" id="mytextarea"rows="40" cols="95"></textarea>
          </div>
               <button type="submit">Envoyer</button>
     </form>
</div>



