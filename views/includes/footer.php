<footer>
     <div class="container">
          <div class="row">
               <div class="mb-5 col-8 offset-2 col-md-4 offset-md-0">
                    <h5 class="text-uppercase text-white">Plan du site</h5>
                    <div>
                         <p><a href="index.php?action=home" class="text-white">Accueil</a></p>
                         <p><a href="index.php?action=biographie" class="text-white">Biographie</a></p>
                         <p><a href="index.php?action=billetSimple" class="text-white">Billet Simple</a></p>
                         <p><a href="index.php?action=contact" class="text-white">Contact</a></p>
                    </div>
               </div>
               <div class="mb-5 col-8 offset-2 col-md-4 offset-md-0">
                    <h5 class="text-uppercase text-white">Me suivre sur</h5>
                    <div>
                         <p><a href="https://facebook.com" title="Page Facebook du développeur du site" class="text-white"><span class="fab fa-facebook-square logo"></span> Facebook</a></p>
                         <p><a href="https://twitter.com/" title="Compte Twitter du développeur du site" class="text-white"><span class="fab fa-twitter-square logo"></span> Twitter</a></p>
                         <p><a href="https://www.instagram.com/?hl=fr" class="text-white"><span class="fab fa-instagram-square logo"></span> Instagram</a></p>
                    </div>
               </div>
               <div class="text-center mb-5 col-8 offset-2 text-md-left col-md-4 offset-md-0">
                    <h5 class="text-uppercase text-white">Admin</h5>
                    <?php if(isset($_SESSION['admin'])): ?>
                         <a href="index.php?action=deconnexion"><span style="font-size: 1.5em; color: Green;"><i class="fas fa-lock-open"></i></span></a></li>
                    <?php else:?>
                         <a href="index.php?action=connexion"><span style="font-size: 1.5em; color: Red;"><i class="fas fa-lock"></i></span></a></li>
                    <?php endif;?>
               </div>
          </div>
     </div>
     <?php unset($_SESSION["error"]); ?>  
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>     
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/JS/flashExplode.js"></script>
</body>
</html>