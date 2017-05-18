<?php
	if(!isset($_GET['section']) || $_GET['section']=='index'){
		include_once('controleur/c_connection.php');
	else{
		include_once('controleur/c_accueil.php');
	}
	}
	