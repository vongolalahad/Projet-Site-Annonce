<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site d'annonce</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
<header></header>
<nav id="horizontal">
    <ul>
        <li><a href="../index.php">Accueil</a></li><!--
        --><?php
        include ("../config/config.php");
        include ("../model/connexion.php");
$lienconnexion=getConnexion();
$req="SELECT * FROM rubrique WHERE position='haut'";
$reponse=mysqli_query($lienconnexion,$req);
while ($x=mysqli_fetch_array($reponse)){
echo '<li><a href="../index.php?rubrique='.$x['num_rubrique'].'">'.$x['nom_rubrique'].'</a></li>';
}?>
</ul>

</nav>
<div style="height: 30px;"></div>
<div style="width: 100%; height: 250px;border: 1px black solid;padding-top: 50px;text-align: center" >
    <form action="../controller/action_connexion.php" method="post">
        <label for="login" style="padding-top: 30px">Login</label><br>
        <input type="text" name="login" id="login" class="background_connection"style="width: 300px;"><br>
        <label for="password" class="password1">Mot de passe</label><br>
        <input type="password" name="password" id="password" class="background_connection" style="width: 300px"><br><br>
        <input type="submit" value="Connexion" name="connexion">
    </form>
</div>
<?php
include("rubrique_bas.php");
?>
<script>
    alert("inscription réussi")
</script>
</body>
</html>
