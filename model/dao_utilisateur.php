<?php

//fonctions qui envoie et récupère les requete de la table utilisateur

/**
 * Enregistre un nouvel utilisateur du site
 *
 * @param $link variable de connexion à la base de données
 * @param $prenom prenom de l'utilisateur
 * @param $nom nom de l'utilisateur
 * @param $login login de l'utilisateur
 * @param $motdepasse mot de passe de l'utilisateur
 * @param $email email de l'utilisateur
 * @param $tel telephone de l'utilisateur
 */
function SaveUser($link,$prenom,$nom,$login,$motdepasse,$email,$tel){

    $hashpass = password_hash($motdepasse, PASSWORD_BCRYPT);
    $sql="INSERT INTO utilisateur() VALUES ('$login','$nom','$prenom','$email','$hashpass',$tel,0)";
    mysqli_query($link,$sql);
}

/**
 * Vérifie si le login existe
 *
 * @param $link variable de connexion à la base de données
 * @param $login login à vérifier
 * @return int renvoi 1 si le login existe et 0 sinon
 */
function VerifierLogin($link,$login){
    $requete="SELECT * FROM utilisateur WHERE login='$login'";
    $reponse=mysqli_query($link,$requete);
    $nombredeligne=mysqli_num_rows($reponse);
    return $nombredeligne;
}

/**
 * Vérifie si le mot de passe du login est correct
 *
 * @param $link variable de connexion à la base de données
 * @param $login login de l'utilisateur
 * @param $motdepasse mot de passe de l'utilisateur
 * @return bool
 */
function VerifierPassword($link,$login,$motdepasse){
    $requete="SELECT * FROM utilisateur WHERE login='$login'";
    $reponse=mysqli_query($link,$requete);
    $x=mysqli_fetch_array($reponse);
    return password_verify($motdepasse,$x['motdepasse']);
}

/**
 * Récupère et renvoie les données de l'utilisateur avec le login spécifier
 *
 * @param $link variable de connexion à la base de données
 * @param $login login de l'utilisateur
 * @return bool|mysqli_result
 */
function DonneUtilisateur($link,$login){
    $requete="SELECT nom, prenom, email, telephone FROM utilisateur WHERE login='$login'";
    $reponse=mysqli_query($link,$requete);
    return $reponse;
}