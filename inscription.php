<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site d'annonce: inscription</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include("vue/form_connexion.php");
?>
<header></header>
<nav id="horizontal">
    <ul>
        <li><a href="index.php">Accueil</a></li><!--
        --><?php
        include ("config/config.php");
        include ("model/connexion.php");
        $lienconnexion=getConnexion();
        $req="SELECT * FROM rubrique WHERE position='haut'";
        $reponse=mysqli_query($lienconnexion,$req);
        while ($x=mysqli_fetch_array($reponse)){
            echo '<li><a href="../index.php?rubrique='.$x['num_rubrique'].'">'.$x['nom_rubrique'].'</a></li>';
        }?>
    </ul>

</nav>
<div style="height: 25px"></div>
<?php
include("vue/form_inscription.php");
?>
<?php
include("vue/rubrique_bas.php");
?>
<?php
if (isset($_GET['error'])){
?>
<script>
    alert("Ce login existe déja. Choisissez un autre login")
</script>
<?php
}
?>
</body>
</html>