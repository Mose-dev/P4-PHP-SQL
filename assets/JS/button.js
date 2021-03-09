// Bouton de retour haut de page
mybutton = document.getElementById("myBtn");
function topFunction() {
  document.body.scrollTop = 0; // Pour Safari
  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
}