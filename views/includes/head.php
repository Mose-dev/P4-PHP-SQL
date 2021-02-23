<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Billet Simple pour l'Alaska, blog de Jean Forteroche écrivain de romans à succés, de best-sellers"/>
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

</head>
<body>


