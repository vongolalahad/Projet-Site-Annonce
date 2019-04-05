<?php
/* contient les autres fonctions qui ne se connecte pas à la base de données */

/**
 * Renvoi la date du jour au format Annee-Mois-Jour
 *
 * @return string Date du jour au format anglais
 */
function getDateDuJour(){
    $dateEnAnglais=date("Y").'-'.date("m").'-'.date("d");
    return $dateEnAnglais;
}

/**
 * Transforme la date du jour du format anglais (Y-m-d) au format français (d-m-Y)
 *
 * @param $dateEnglish Date au format anglais
 * @return string
 */
function getDateEnFr($dateEnglish){
    $tableau=explode("-",$dateEnglish);
    $dateFr=$tableau[2]."-".$tableau[1]."-".$tableau[0];
    return $dateFr;
}