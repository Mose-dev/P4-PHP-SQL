     <footer id="end">
          
               <div class="menu_end">
               <h2>PLAN DU SITE</h2>
                    <ul>
                         <li><a href="index.php?action=home">Accueil</a></li>
                         <li><a href="index.php?action=biographie">Biographie</a></li>
                         <li><a href="index.php?action=billetSimple">Billet simple</a></li>
                         <li><a href="index.php?action=contact">Contact</a></li>
                    </ul>
               </div>
          
               <div>
               <h2>REJOIGNEZ MOI SUR</h2>
                    <ul>
                         <li><a href="https://twitter.com/">Twitter</a></li>
                         <li><a href="https://facebook.com">Facebook</a></li>
                         <li><a href="https://www.instagram.com/?hl=fr">Instagram</a></li>
                    </ul>
               </div>
        
               <div>
               <h2>ADMIN</h2>
                    <?php if(isset($_SESSION['user']) || isset($_SESSION['admin'])  ):?>
                         <a href="index.php?action=deconnexion">Deconnexion</a>
                    <?php else:?>
                         <a href="index.php?action=connexion">Se connecter</a>
                    <?php endif;?>
               </div>


     </footer>
</div>
</body>
</html>