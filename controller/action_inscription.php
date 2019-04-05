<?php
/* gère la récupération des données des formulaires et liens d'inscription */


if (isset($_POST['save_inscription'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];
    $motdepasse = $_POST['password'];
    $login = $_POST['login'];

    include("../config/config.php");
    include("../model/connexion.php");
    include("../model/dao_utilisateur.php");

    $lienConnexion = getConnexion();

    /* Verifie si le login existe déja */
    $ligne = VerifierLogin($lienConnexion, $login);

    if ($ligne == 0) {
        SaveUser($lienConnexion, $prenom, $nom, $login, $motdepasse, $email, $tel);
        $url_redirect = "../vue/login.php";
        die('<meta http-equiv="refresh" content="0; URL=' . $url_redirect . '">');
    }
    else{
        $url_redirect = "../inscription.php?login_existe";
        die('<meta http-equiv="refresh" content="0; URL=' . $url_redirect . '">');
    }
}
