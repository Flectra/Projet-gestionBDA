<?php


/*Tester si il existe déjà un respo correspondant au club, sinon, le créer
*/
require_once "../modele/m_Club.php";
require_once "../modele/m_Respo.php";

$respo = new Respo();
$club = new Club();

//on récupère le club concerné par la modification
$idclub = isset($_POST['idclub']) ? $_POST['idclub'] : "pas de club envoyé";

$prenomrespo= isset($_POST['prenomrespo']) ? $_POST['prenomrespo'] : NULL;
$nomrespo= isset($_POST['nomrespo']) ? $_POST['nomrespo'] : NULL;
$mailrespo= isset($_POST['mail']) ? $_POST['mail'] : NULL;

$modifrespo = array('firstname'=> $prenomrespo,'lastname'=> $nomrespo,'mail'=>$mailrespo ,'idclub' => $idclub);

//on regarde si il existe déjà un respo

$respoClub = $respo->getRespobyClub($idclub);

print_r($respoClub);

/* regarde si il y a eu des modification envoyées, sinon regarde si il n'y a pas déjà de respo, en crée un si besoin et renvoie au formulaire*/


	if ($respoClub==NULL){
		$newRespo = array('firstname'=> NULL,'lastname'=>NULL,'mail'=>NULL ,	
						'idclub' => $idclub);
		print_r('new respo :'.$newRespo);
		$respoClub = $respo->createRespo($newRespo);
	}


	$respoClub = $respo->modifyRespo($modifrespo);
	header('Location: ../index.php?section=club');






?>