<?php


	if(!isset($_GET['section']) || $_GET['section']=='index'){
		include_once('controleur/c_accueil.php');
	}
	else if($_GET['section']=='login'){
		include_once('controleur/c_login.php');
	}
	else if($_GET['section']=='club'){
		include_once('controleur/c_club.php');
	}
  else if($_GET['section']=='avenir'){
		include_once('controleur/c_avenir.php');
	}
	else if($_GET['section']=='log'){
		include_once('controleur/c_log.php');
	}
	else if($_GET['section']=='logout'){
		include_once('controleur/c_logout.php');
	}
	else if($_GET['section']=='reg'){
		include_once('controleur/c_reg.php');
	}
	else if($_GET['section']=='registration'){
		include_once('controleur/c_registration.php');
	}