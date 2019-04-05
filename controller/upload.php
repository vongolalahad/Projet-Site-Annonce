<?php
/* Upload l'image de l'annonce à poster sur le serveur */

		$dossier               = '../image_client/';
		$taille_maximum        = 15000000;
		$extensions_valables   = array('.jpg', '.JPG','.png', '.PNG','.gif','.GIF');
		$nom_fichier           = basename($_FILES['monfichier']['name']);

       $extension_du_fichier  = strrchr($nom_fichier, '.');

		$taille_du_fichier     = filesize($_FILES['monfichier']['tmp_name']);
		move_uploaded_file($_FILES['monfichier']['tmp_name'], $dossier . $nom_fichier);
