<?php require 'views/includes/head.php'; ?>
<?php require 'views/includes/menu.php'; ?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5 pb-0">
                    <h1 class="font-weight-bold text-white mt-3">Commentaires signalés</h1>
               </div>
          </div>
     </div>
</div>
<!--Commentaires signalés-->
<div class="container text-center">
     <div class="row">
          <div class="col">
               <div class="card bg-transparent border-0" >
                    <div class="card-body">
                         <?php if(isset($_SESSION['admin'])): ?>
                              <div>
                                   <a href="index.php?action=dashboard" class="btn btn-success font-weight-bold border-white my-2">Retour au dashboard</a>
                              </div>
                              <?php if(isset($_SESSION['error_message'])): ?> 
                                   <div class="alert-explode btn btn-<?= $_SESSION['error_message']['type'] ?> font-weight-bold border-white m-auto">
                                        <?= $_SESSION['error_message']['message']; ?>
                                   </div>
                              <?php endif; ?>
                              <?php unset($_SESSION['error_message']) ?>
                         <?php endif; ?>
                    </div>
               </div>
          </div>
     </div>
</div>
<div>
     <table class="table-responsive">
          <thead>
               <tr class="text-white">
                    <th scope="col">Nom</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Date</th>
                    <th scope="col">Conserver</th>
                    <th scope="col">Eliminer</th>
               </tr>
          </thead>
          <tbody>
               <?php foreach($getComment as $reportComment): ?>
               <tr>
                    <td scope="row"><?=$reportComment['author'] ?></td>
                    <td scope="row"><?=$reportComment['comment']?></td>
                    <td scope="row"><?=date("d/m/Y à H:i:s",strtotime($reportComment['comment_date'])) ?></td>
                    <td scope="row"><a class="btn btn-success"href="index.php?action=keepReport&id=<?=$reportComment['id'] ?>">Conserver</a></td>
                    <td scope="row"><a class="btn btn-danger" href= "index.php?action=deleteReport&id=<?=$reportComment['id'] ?>" >Eliminer</a></td>
               </tr>
               <?php endforeach; ?>
          </tbody>
     </table>
</div>                 
<?php require 'views/includes/footer.php'; ?>