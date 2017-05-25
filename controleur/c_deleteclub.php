<?php

require_once "../modele/m_Club.php";

$idclub = isset($_POST['idclub']) ? $_POST['idclub'] : NULL;

$club = new Club();

echo($idclub);

		/*supprime le club de l'id correspondante*/
		
		if ($idclub!=NULL) {
			$club = $club->deleteClub($idclub);
			header('Location: ../index.php?section=club');
		}




?>