<?php

$connected =false;
if(isset($_COOKIE["data_username"])){

	$connected = true;
}


include_once('vue/v_accueil.php');

?>