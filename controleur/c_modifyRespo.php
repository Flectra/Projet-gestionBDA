<?php


/*Tester si il existe déjà un respo correspondant au club, sinon, le créer
*/
require_once "modele/m_Club.php";
require_once "modele/m_Respo.php";

$respo = new Respo();
$club = new Club();

//on récupère le club concerné par la modification
$idclub = isset($_POST['idclub']) ? $_POST['idclub'] : "pas de club envoyé";
$modifrespo = isset($_POST['modifrespo']) ? $_POST['modifrespo'] : NULL;

//on regarde si il existe déjà un respo, sinon, on le crée
$respoClub = $respo->getRespobyClub($idclub);

//on regarde si le 
if($modifrespo != NULL){

}

if (empty($respoClub)){
	$newRespo = array('firstname'=> NULL,'lastname'=>NULL,'mail'=>NULL ,	
					'idclub' => $clubRespo['idclub']))
	$respoClub = $respo->createRespo($newRespo);
}



include_once "vue/v_clubs.php#modification_respo";




?>