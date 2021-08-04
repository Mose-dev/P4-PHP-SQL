<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Billet Simple pour l'Alaska, blog de Jean Forteroche écrivain de romans à succès, de best-sellers"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/home.css">
<!--Affichage du titre de la page dans l'onglet-->
<?php if(isset($title) && $title != null)
     {
          $title = $title; 
     }else{
          $title = "Nom de page indéfini";
     } 
?>
<title><?= $title ?></title>
<link rel="icon" type="image/png" sizes="20x16" href="assets/images/favicon.png">
<script src="https://kit.fontawesome.com/9a1c038275.js" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/xr77zm2lop8kch7258caeqxxm4y8zdkit2utu4b38f8m75ck/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script>tinymce.init({selector: "#mytextarea"});</script>
<head>
  <!--Bouton Go top-->
  <style>
    a#cRetour{
      border-radius:3px;
      padding:10px;
      font-size:15px;
      text-align:center;
      color:#fff;
      background:red;
      position:fixed;
      right:20px;
      opacity:1;
      z-index:99999;
      transition:all ease-in 0.2s;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      text-decoration: none;
    }
    a#cRetour:before{ content: "\25b2"; }
    a#cRetour:hover{
      background:rgba(0, 0, 0, 1);
      transition:all ease-in 0.2s;
    }
    a#cRetour.cInvisible{
      bottom:-35px;
      opacity:0;
      transition:all ease-in 0.5s;
    }

    a#cRetour.cVisible{
      bottom:20px;
      opacity:1;
    }
  </style> 
</head>
<body>
<div id="haut"></div> 
<div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function(ev) {
      document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
    };
  });
</script>


