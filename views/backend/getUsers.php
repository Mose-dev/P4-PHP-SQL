<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5 pb-0">
                    <h1 class="font-weight-bold text-white mt-3">Liste des adhérants</h1>
               </div>
          </div>
     </div>
</div>
<div class="postContainer contain">
     <div>
          <a href="index.php?action=dashboard" class="btn btn-success font-weight-bold border-white my-2">Retour au dashboard</a>
     </div>
</div>
<!--Tableau de la liste des adhérants-->
<div>
     <table class="table-responsive">
          <thead>
               <tr class="text-white">
                    <th scope="col">Adhérant n°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
               </tr>
          </thead>
          <tbody>
               <?php foreach($getUsers as $users): ?>
                    <tr>
                         <td scope="row"><?=$users['id'] ?></td> 
                         <td scope="row"><?=$users['name'] ?></td>
                         <td scope="row"><?=$users['email'] ?></td>
                              <?php if($users['id'] > 1): ?>
                                   <td><a class="btn btn-danger" href="index.php?action=deleteUser&id=<?=$users['id'] ?>">Eliminer</a></td>
                              <?php elseif($users['id'] == 1): ?>
                                   <td><?= 'Administrateur' ?></td>
                              <?php endif; ?>
                    </tr>
               <?php endforeach; ?>
          </tbody>
     </table>
</div>

          