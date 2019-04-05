<nav id="horizontal">
    <ul>
        <?php
        $lienconnexion=getConnexion();
        $req="SELECT * FROM rubrique WHERE position='bas'";
        $reponse=mysqli_query($lienconnexion,$req);
        while ($x=mysqli_fetch_array($reponse)){
            echo '<li><a href="?rubrique='.$x['num_rubrique'].'">'.$x['nom_rubrique'].'</a></li>';
        }
        echo '</ul>'
        ?>

    </ul>
</nav>