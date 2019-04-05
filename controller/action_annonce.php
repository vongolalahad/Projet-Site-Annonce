<?php
session_start();
/* gère la récupération des données des formulaires et liens d'annonces */
$titre        =  $_POST['titre'];                   // Titre de l"annonce
$desciption   =  $_POST['description'];             // Description de l'annonce
$rubrique     =  $_POST['num_rubrique'];            // Numéro de la rubrique
$login        =  $_SESSION['login'];                // login de la personne qui fait l'annonce

include('../model/connexion.php');
include('../config/config.php');
include('../fonctions/fonctions.php');
include('../model/dao_annonce.php');

$date_annonce=getDateDuJour();
$link=getConnexion();

include('upload.php');

SaveAnnonce($link,$titre,$desciption,$date_annonce,$rubrique,$login,$nom_fichier);
header("location:../vue/administrateur.php");