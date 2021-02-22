<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5 pb-1">
                    <h1 class="font-weight-bold text-white mt-3">Ecrivez votre chapitre</h1>
               </div>
          </div>
     </div>
</div>    
<!--Rédaction d'un chapitre (Admin)-->
<div class="container text-center">
     <div class="row">
          <div class="col ">
               <div class="card bg-transparent border-0">
                    <div class="card-body">
                         <form action="index.php?action=addBillet" method="post">
                              <div class="form-group">
                                   <label for="title" class="font-weight-bold">Titre</label>
                                   <input type="text" class="form-control text-center" name="title" id="title" />
                              </div> 
                               <div class="form-group">
                                   <label for="mytextarea" class="font-weight-bold">Contenu</label><br />
                                   <textarea class="form-control" name="mytextarea" id="mytextarea" rows="30" cols="50"></textarea>       
                              </div>
                                   <button type="submit" class="btn btn-danger">Envoyer</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>



