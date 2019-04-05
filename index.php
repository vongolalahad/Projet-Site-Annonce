<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site d'annonce</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include("vue/form_connexion.php");
?>
<header></header>
<?php
include('vue/rubrique_haut.php')
?>
<div class="marquee">
    <marquee behavior="" direction="" style="">Bienvenue dans notre site. Ici vous pouvez
    passer des annonces gratuitement. Pour passer une annonce veuillez vous inscrire gratuitement.</marquee>
</div>
<?php
include("fonctions/fonctions.php");
if(!isset($_GET['rubrique'])) {
       include("vue/affichage.php");
   }
   else{
include("vue/afficher_annonce_categorie.php");
   }
?>
<?php
include ("vue/rubrique_bas.php");
?>
<?php
if (isset($_GET['password_incorrect'])){
    ?>
    <script>
        alert("Login ou mot de passe incorrect!!")
    </script>
    <?php
}
?>
</body>
</html>