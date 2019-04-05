<select name="num_rubrique" id="">
        <?php
        $req="SELECT * FROM rubrique ";
        $reponse=mysqli_query($lienConnexion,$req);
        while ($x=mysqli_fetch_array($reponse)){
            $num_rubrique=$x['num_rubrique'];
            echo '<option value="'.$num_rubrique.'">'.$x['nom_rubrique'].'</option>';
        }?>
</select>
