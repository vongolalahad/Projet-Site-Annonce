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
            echo '<li><a href="?rubrique='.$x['num_rubrique'].'">'.$x['nom_rubrique'].'</a></li>';
        }?>
    </ul>
</nav>