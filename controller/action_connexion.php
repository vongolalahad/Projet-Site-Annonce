<?php
/* gère la récupération des données des formulaires et liens de connexion */

session_start();

include('../config/config.php');
include('../model/connexion.php');
include('../model/dao_utilisateur.php');

$lienconnexion=getConnexion();              // Connexion à la base de données

/*
 * Si on demande un connexion, verifier que le login existe dans la base de données
 * Si il existe, vérifier que le mot de passe rentré est correcte. Et si tout est correcte,
 * renvoyé l'utilisateur à la page d'admin.
 * Sinon le renvoyé à la page d'accueil
 */
if (isset($_POST['connexion'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $ligne = VerifierLogin($lienconnexion, $login);
    if ($ligne == 1) {
        if (VerifierPassword($lienconnexion, $login, $password)) {
            $_SESSION['login'] = $login;
            $res=DonneUtilisateur($lienconnexion,$login);
            $user=mysqli_fetch_array($res);
            $_SESSION['prenom']=$user['prenom'];
            $_SESSION['connecte']=0;
            header('location:../vue/administrateur.php');
            die();
        }
    }
    header('location:../index.php?password_incorrect');
}