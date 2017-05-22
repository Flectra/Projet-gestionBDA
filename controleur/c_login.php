<?php

require_once("../modele/m_Utilisateur.php");

	$test = 
	$username = isset($_POST['inputEmail']) ? $_POST['inputEmail'] : NULL;
	$password =isset($_POST['inputPassword']) ? $_POST['inputPassword'] : "ça marche pas";

		$utilisateur = new Utilisateur();
		$error="";
		if ($utilisateur = $utilisateur->getByUserName($username)) {
	        if ($password == $utilisateur['password']) {
	          $data = array("username" => $utilisateur["username"],
	                        "role" => "Admin");
	          setcookie("data", $data, time() + (3600 * 25), "/",null, null, false, true);
	          header('Location:../index.php');
	        }
	        else {
	          self::$error = "Mot de passe incorrect";
	        }
	      }
	    else {
	       self::$error = "Utilisateur inexistant";
	    }
    	

	
   
  	/**public function disconnect() {
      if (isset($_COOKIE['data'])) {
        setcookie("data", "", time() - 3600, "/");
        unset($_COOKIE['data']);
      }
    **/
  ?>