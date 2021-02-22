<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>

<!--Jumbotron-->
<div class="container text-center">
     <div class="row">
          <div class="col mt-2">
               <div class="jumbotron bg-transparent mt-5">
                    <h1 class="font-weight-bold text-white mt-3">Dashboard</h1> 
               </div>
          </div>
     </div>
</div>
<!-- Begin Page Content -->
<div class="container text-center">
     <div class="row justify-content-center">
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card shadow h-100 py-2">
                    <div class="card-body">
                         <div class="col-auto">
                         <i class="fas fa-feather-alt fa-2x text-success"></i>
                         </div>
                         <div class="font-weight-bold text-uppercase">
                              <a class="text-success" href="index.php?action=addBillet">Editer un billet</a>
                         </div>
                    </div>
               </div>
          </div>         
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card shadow h-100 py-2">
                    <div class="card-body">
                         <div class="col-auto">
                         <i class="fas fa-hand-paper fa-2x text-danger"></i>
                         </div>   
                         <div class=" font-weight-bold text-uppercase">
                              <a class="text-danger" href="index.php?action=billetSimple">Retirer un billet</a>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card shadow h-100 py-2">
                    <div class="card-body">
                         <div class="col-auto">
                              <i class="fab fa-accusoft fa-2x text-danger"></i>
                         </div>   
                         <div class="font-weight-bold text-uppercase">
                              <a class="text-danger" href="index.php?action=report">Commentaires signalés</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row justify-content-center">
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card shadow h-100 py-2">
                    <div class="card-body">
                         <div class="col-auto">
                              <i class="fas fa-paper-plane fa-2x text-primary"></i>
                         </div>
                         <div class="font-weight-bold text-uppercase">
                              <a class="text-primary" href="index.php?action=getmessages">Messages</a>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card shadow h-100 py-2">
                    <div class="card-body">
                         <div class="col-auto">
                              <i class="fas fa-users fa-2x text-primary"></i>
                         </div>
                         <div class="font-weight-bold text-uppercase">
                              <a class="text-primary" href="index.php?action=getUsers">Adhérants</a> 
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card shadow h-100 py-2">
                    <div class="card-body">
                         <div class="col-auto">
                         <i class="fas fa-bed fa-2x text-danger"></i>
                         </div>
                         <div class="font-weight-bold text-uppercase">
                              <a class="text-danger"href="index.php?action=deconnexion">Deconnexion</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

                    

               
              
               
      
               
          
          
          
          
         

  

     