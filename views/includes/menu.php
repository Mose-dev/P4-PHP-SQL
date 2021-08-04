<!--Menu de navigation-->
<header>
     <div class="container-fluid">
          <div class="row">
               <nav class="col navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand text-white" href="index.php?action=home">
                    Jean Forteroche
                    <img src="assets/images/ma-plume.jpg" width="60" height="30" alt="Site logo" class="rounded">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarContent" class="collapse navbar-collapse">
                         <ul class="navbar-nav">
                              <li class="nav-item active">
                                   <a class="nav-link" href="index.php?action=home">Accueil</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?action=biographie">Biographie</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?action=billetSimple">Billet simple</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?action=inscription">Inscription</a>
                              </li>
                              <?php if(isset($_SESSION['user'])): ?>
                              <li class="nav-item">
                                   <a class="nav-link text-danger" href="index.php?action=deconnexion">Deconnexion</a>
                              </li>
                              <?php elseif(isset($_SESSION['admin'])): ?>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?action=deconnexion"><span style="font-size: 1em; color: Green;"><i class="fas fa-lock-open"></i></span></a>
                              </li>
                              <?php else:?>
                              <li class="nav-item">
                                   <a class="nav-link text-success" href="index.php?action=connexion">Se connecter</a>
                              </li>
                              <?php endif;?>
                              <li class="nav-item">
                                   <a class="nav-link" href="index.php?action=contact">Contact</a>
                              </li>
                         </ul>
                    </div>
               </nav> 
          </div>
     </div>
</header>

