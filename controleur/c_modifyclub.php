<?php

require_once "../modele/m_Club.php";

$nomclub = isset($_POST['nomclub']) ? $_POST['nomclub'] : NULL;
$pagefb= isset($_POST['pageFB']) ? $_POST['pageFB'] : NULL;
$urlimage= isset($_POST['URLimage']) ? $_POST['URLimage'] : NULL;
$descriptif= isset($_POST['descriptif']) ? $_POST['descriptif'] : NULL;
$idclub = isset($_POST['idclub']) ? $_POST['idclub'] : NULL;

$club= new Club();

// on remplit le tableau modifié
$modifiedClub = array('nomclub' => $nomclub,
               'pagefb' => $pagefb,
               'urlimage' => $urlimage,
               'descriptif' => $descriptif,
               'idclub' => $idclub
               );

print_r($modifiedClub);

		/*vérifie si il y a au moins un nom de club de renseigné avant de l'enregistrer dans la BDD*/
		if ($nomclub!=NULL) {
			$modifiedClub = $club->modifyClub($modifiedClub);
			echo ($nomclub);
			print_r($modifiedClub);
			echo("ça a bien marché");
			header('Location: ../index.php?section=club');
		}
	        
	    else {
	       $error = "Vous n'avez pas entré de nom pour votre Club";
	       print_r($username);
	       header('Location: ../');
	    }





?>