<?php require 'views/includes/head.php';?>
<?php require 'views/includes/menu.php';?>
<!--header-->
     <header>
          <h1 id="title1">Contactez-moi</h1>
          <h2 id="title2">
               Veuillez remplir avec soin le formulaire ci-dessous<br /> 
               et laisser votre message
          </h2>
     </header>
<!--Section formulaire de contact-->
     <section id="section_form">
          <h1>Formulaire de contact</h1>
          <div class="container_form">
               <form id="formulaire" action="index.php?action=contact" method="post">
                    <div>
                         <div class="groupe1">
                            <label for="firstname" class="text-form">Votre prénom</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom" required>
                         </div>
                         <div class="groupe1">
                            <label for="name" class="text-form">Votre nom</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required>
                         </div>
                    </div>
                    <div class="groupe2">
                        <label for="mail" class="text-form"> Votre adresse e-mail</label>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="votre_adresse@mail" required>
                    </div>
                    <div class="groupe2">
                        <label for="objet" class="text-form">Objet du message <span>(moins de 255 caractères)</span></label>
                        <input type="text" class="form-control2" name="objet" id="objet" placeholder="Objet du message" required>
                    </div>
                    <div class="groupe2">
                        <label for="message" class="text-form">Votre message</label>
                        <textarea class="form-control3" name="message" id="message" rows="8" cols="45" placeholder="Votre message" required></textarea>
                    </div>
                    <div class="checkbox">
                        <input class="form-check-input" type="checkbox" name="check" id="check">
                        <label for="check" class="form-check-label" for="check">Je ne suis pas un Robot ♪</label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="submit-form">Envoyer</button>
                    </div>
                </form>
               
          </div>
     
     </section>
         
     <?php
          require 'views/includes/footer.php';
     ?>