<?php require 'views/includes/head.php'; ?>
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
          <div class="col">
               <div class="jumbotron bg-transparent  pb-0">
                    <h1 class="font-weight-bold text-white mt-3">Vos messages</h1>
               </div>
          </div>
     </div>
</div>
<div class="postContainer contain">
     <div>
          <a href="index.php?action=dashboard" class="btn btn-success font-weight-bold border-white my-2">Retour au dashboard</a>
     </div>
</div>
<!--Tableau de la liste des messages-->
<div>
     <table class="table-responsive">
          <thead>
               <tr class="text-white">
                    <th scope="col">Prenom</th>
                    <th scope="col" >Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
               </tr>
          </thead>
          <tbody>
               <?php foreach($messages as $message): ?>
                    <tr>
                         <td scope="row"><?=$message['firstname'] ?></td> 
                         <td scope="row"><?=$message['name'] ?></td>
                         <td scope="row"><?=$message['email'] ?></td>
                         <td scope="row"><?=$message['content'] ?></td>
                         <td scope="row"><a class="btn btn-danger" href="index.php?action=deleteMessages&id=<?=$message['id'] ?>" >Eliminer</a></td>
                    </tr>
               <?php endforeach; ?>
          </tbody>
     </table>
</div>