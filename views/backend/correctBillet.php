<?php require 'views/includes/head.php'; ?>
<?php require 'views/includes/menu.php'; ?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5 pb-1">
                    <h1 class="font-weight-bold text-white mt-3">Corriger votre chapitre</h1>
               </div>
          </div>
     </div>
</div>    
<!--Correction du billet (Admin)-->
<div class="container text-center">
     <?php if(isset($_GET['id'])): ?>
          <div class="row">
               <div class="col ">
                    <div class="card bg-transparent border-0">
                         <div class="card-body">
                              <form action="index.php?action=correct&id=<?= $_GET['id'] ?>" method="post">
                                   <div class="form-group">
                                        <label for="title" class="font-weight-bold">Titre</label>
                                        <input type="text" class="form-control text-center" name="title" id="title" value="<?= $postBillet['title'] ?>"/>
                                   </div> 
                                   <div class="form-group">
                                        <label for="mytextarea" class="font-weight-bold">Contenu</label><br />
                                        <textarea class="form-control" name="mytextarea" id="mytextarea" rows="30" cols="50"><?= $postBillet['mytextarea'] ?></textarea>       
                                   </div>
                                        <button type="submit" class="btn btn-danger">Envoyer</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     <?php endif; ?>
</div>
<<<<<<< HEAD







                         

=======
>>>>>>> cacb82aff7b6c0387b40f119ed168091188d2943
