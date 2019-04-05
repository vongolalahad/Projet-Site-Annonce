<?php

//fonctions qui envoie et récupère les requete de la table d'annonce

/**
 * Récupère et renvoi les annonces qui ont été posté sur le site
 *
 * @param $link variable de connexion à la base de données
 * @param string $where condition de la requete
 * @return bool|mysqli_result
 */
function AffichageAnnonce($link,$where=''){
    $requete="SELECT id_annonce, titre, description, date_annonce, login, fichier FROM annonce $where ORDER BY date_annonce DESC LIMIT 0,15" ;
    $reponse=mysqli_query($link,$requete);
    return $reponse;
}

/**
 * Enregistre une annonce sur le site
 *
 * @param $link variable de connexion à la base de données
 * @param $titre titre de l'annonce
 * @param $description description de l'annonce
 * @param $date_annonce date de l'annonce
 * @param $num_rubrique numéro de la rubrique de l'annonce
 * @param $login login de l'utilisateur qui a créer l'annonce
 * @param $nom_fichier nom de l'image associée à l'annonce
 */
function SaveAnnonce($link,$titre,$description,$date_annonce,$num_rubrique,$login,$nom_fichier){
    $sql="INSERT INTO annonce() VALUES ('','$titre','$description','$date_annonce','$login','$num_rubrique','$nom_fichier')";
    mysqli_query($link,$sql);
}

/**
 * Récupère les données concernant un utilisateur (nom, prenom, telephone)
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


/**
 * Récupère et renvoie toutes les annonces concernant une rubrique en particulier
 *
 * @param $link variable de connexion à la base de données
 * @param $num_rubrique le numéro de la rubrique
 * @return bool|mysqli_result
 */
function AffichageAnnonceRubrique($link,$num_rubrique){
    $req="SELECT * FROM rubrique, annonce WHERE rubrique.num_rubrique=annonce.num_rubrique AND annonce.num_rubrique='$num_rubrique' ORDER BY date_annonce";
    $reponse=mysqli_query($link, $req);
    return $reponse;
}

/**
 * Récupère et renvoi les 2 premières annonces faites par un utlisateur en particulier
 *
 * @param $link variable de connexion à la base de données
 * @param $login login de l'utilisateur
 * @return bool|mysqli_result
 */
function AffichageAnnonceUtilisateur($link,$login){
    $req="SELECT * FROM annonce WHERE login='$login' ORDER BY date_annonce DESC LIMIT 0, 2";
    $reponse=mysqli_query($link,$req);
    return $reponse;
}

/**
 * Récupère et renvoi les annonces faites par un utlisateur en particulier à partir de la troisième annonce
 *
 * @param $link variable de connexion à la base de données
 * @param $login login de l'utilisateur
 * @return bool|mysqli_result
 */
function AffichageAnnonceUtilisateur1($link,$login){
    $req="SELECT * FROM annonce WHERE login='$login' ORDER BY date_annonce DESC LIMIT 2, 15";
    $reponse=mysqli_query($link,$req);
    return $reponse;
}