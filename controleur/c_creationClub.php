<?php

require_once "../modele/m_Club.php";

$nomclub = isset($_POST['nomclub']) ? $_POST['nomclub'] : NULL;
$pageFB= isset($_POST['pageFB']) ? $_POST['pageFB'] : NULL;
$URLimage= isset($_POST['URLimage']) ? $_POST['URLimage'] : NULL;
$descriptif= isset($_POST['descriptif']) ? $_POST['descriptif'] : NULL;

$club = new Club();
$newClub = array('nomclub' => $nomclub,
               'pagefb' => $pageFB,
               'URLimage' => $URLimage,
               'descriptif' => $descriptif
               );

		/*vérifie si il y a au moins un nom de club de renseigné avant de l'enregistrer dans la BDD*/
		if ($nomclub!=NULL) {
			$createdclub = $club->createClub($newClub);
			header('Location: ../index.php?section=club');
		}
	        
	    else {
	       $error = "Vous n'avez pas entré de nom pour votre Club";
	       print_r($username);
	       header('Location: ../index.php?section=club#exemple_fadein');
	    }





?>