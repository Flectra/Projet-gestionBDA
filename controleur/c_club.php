<?php


/*Tester si il y a un cookie (quelqu'un est connecté)
affecté la valeur true à la variable $connecté (pour pouvoir influer sur la vue)
*/
require_once "modele/m_Club.php";

$connected =false;
if(isset($_COOKIE["data"])){
	$connected = true;
}

$club = new Club();
$AllClub = $club->getAll(); //tableau de tous les clubs


include_once "vue/v_clubs.php";




?>