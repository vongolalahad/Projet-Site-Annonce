<?php

/* la fonction pour se connecter à la base de données */
function getConnexion(){
return mysqli_connect(SERVEUR,UTILISATEUR,MOTDEPASSE,BASE);
}