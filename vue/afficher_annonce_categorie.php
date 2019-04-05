<?php
include("model/dao_annonce.php");
$resultat=AffichageAnnonceRubrique($lienconnexion,$_GET['rubrique']);
while($x=mysqli_fetch_array($resultat)) {
    $image             =$x['fichier'];
    $titre             =$x['titre'];
    $description       =$x['description'];
    $date_annonce      =$x['date_annonce'];
    $date_annonce_fr   =getDateEnFr($date_annonce);
    ?>
    <div style="width: 100%; height: auto; border-bottom: 1px solid black;padding-top: 10px;padding-bottom: 10px;">
        <div style="width: 200px; height: auto;display: inline-block;vertical-align: top;"><?php echo '<img src="image_client/'.$image.'" width=100%>' ?>
        </div>
        <div style="width: 753px; height: auto;display: inline-block;">
            <div style="width: 100%;margin-bottom: 10px; background-color: cornflowerblue;color: white;">
                <h3 style="margin-top: 0; font-family: Cambria;"><?php echo $titre; ?></h3>
            </div>
            <div style="width: 100%;height: auto; text-align: justify; padding-top: 5px;padding-left: 5px;padding-right: 5px;padding-bottom: 10px">
                <?php echo $description; ?>
            </div>
            <div style="width: 100%; height: 20px;background-color: aliceblue;margin-top: 40px;color: black">
                <div style="width: 100px; display: inline-block;">
                    <?php echo 'Le '.$date_annonce_fr; ?>
                </div>
                <div style="display: inline-block; width: 535px; vertical-align: top">
                    <?php
                    $res=DonneUtilisateur($lienconnexion,$x['login']);
                    if ($user=mysqli_fetch_array($res)){
                        echo 'par '.$user['prenom'] .' '.$user['nom'].' | TEL= '.$user['telephone'].' | E-MAIL= '.$user['email'];
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>