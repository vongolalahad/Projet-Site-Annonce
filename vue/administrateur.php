<?php
session_start();

// Si il est pas connecté et veut accéder à cette page, le rediriger vers error.php
if (!isset($_SESSION['connecte'])){
    header('location:error.php');
}
else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Site d'annonce</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <?php
    include("form_deconnexion.php");
    include("../config/config.php");
    include('../model/connexion.php');
    include('../model/dao_annonce.php');
    include('../fonctions/fonctions.php');

    $lienConnexion = getConnexion();

    ?>

    <header></header>
    <?php
    include('add_mes_annonce.php');
    ?>
    <aside style="margin-left: 3px;padding-left: 3px">
        <div>
            <h3>Liste de vos annonces</h3>
        </div>
        <?php
        $login = $_SESSION['login'];
        $resultat = AffichageAnnonceUtilisateur($lienConnexion, $login);
        while ($x = mysqli_fetch_array($resultat)) {
            $image = $x['fichier'];
            $titre = $x['titre'];
            $description = $x['description'];
            $date_annonce = $x['date_annonce'];
            $date_annonce_fr = getDateEnFr($date_annonce);
            ?>
            <div style="height: auto; border-bottom: 1px solid black;padding-top: 10px;padding-bottom: 10px;">
                <div style="width: 200px; height: auto;display: inline-block;vertical-align: top;">
                    <?php echo '<img src="../image_client/' . $image . '" width=100%>' ?>
                </div>
                <div style="width: 350px;height: auto;display: inline-block;">
                    <div style="margin-bottom: 10px; background-color: cornflowerblue;color: white;">
                        <h3 style="margin-top: 0; font-family: Cambria;"><?php echo $titre; ?></h3>
                    </div>
                    <div
                        style="height: auto; text-align: justify; padding-top: 5px;padding-left: 5px;padding-right: 5px;padding-bottom: 10px">
                        <?php echo $description; ?>
                    </div>
                    <div style="height: 20px;background-color: aliceblue;margin-top: 40px;color: black">
                        <div style="width: 100px; display: inline-block;">
                            <?php echo 'Le ' . $date_annonce_fr; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </aside>
    <?php
    $resultat = AffichageAnnonceUtilisateur1($lienConnexion, $login);
    while ($x = mysqli_fetch_array($resultat)) {
        $image = $x['fichier'];
        $titre = $x['titre'];
        $description = $x['description'];
        $date_annonce = $x['date_annonce'];
        $date_annonce_fr = getDateEnFr($date_annonce);
        ?>
        <div style="width: 100%; height: auto; border-bottom: 1px solid black;padding-top: 10px;padding-bottom: 10px;">
            <div style="width: 200px; height: auto;display: inline-block;vertical-align: top;">
                <?php echo '<img src="../image_client/' . $image . '" width=100%>' ?>
            </div>
            <div style="width: 753px; height: auto;display: inline-block;">
                <div style="width: 100%;margin-bottom: 10px; background-color: cornflowerblue;color: white;">
                    <h3 style="margin-top: 0; font-family: Cambria;"><?php echo $titre; ?></h3>
                </div>
                <div
                    style="width: 100%;height: auto; text-align: justify; padding-top: 5px;padding-left: 5px;padding-right: 5px;padding-bottom: 10px">
                    <?php echo $description; ?>
                </div>
                <div style="width: 100%; height: 20px;background-color: aliceblue;margin-top: 40px;color: black">
                    <div style="width: 100px; display: inline-block;">
                        <?php echo 'Le ' . $date_annonce_fr; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </body>
    </html>
    <?php
}