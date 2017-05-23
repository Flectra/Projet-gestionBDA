<?php

$connected =false;
if(isset($_COOKIE["data"])){
	$connected = true;
}

print_r($_COOKIE);


include_once('vue/v_accueil.php');

?>