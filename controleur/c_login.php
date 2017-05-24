<?php

require_once("../modele/m_Utilisateur.php");

	$username = isset($_POST['inputEmail']) ? $_POST['inputEmail'] : "pas de username";
	$password = isset($_POST['inputPassword']) ? $_POST['inputPassword'] : "pas de password";

		$utilisateur = new Utilisateur();
		$error="";
		$utilisateur = $utilisateur->getByUserName($username);

		/*vérifie si le mot de passe entré correspond à celui présent pour l'utilisateur dans la base de donnée*/
		if (true) {
	        if ($password == $utilisateur['password']) {
	          $data = array("username" => $utilisateur["username"],
	                        "role" => "Admin");
	          setcookie("data", $data, time() + (3600 * 25), "/",null, null, false, true);
	          header('Location: ../');
	        }
	        else {
	          $error = "Mot de passe incorrect";
	          print_r($username);
	          header('Location: ../index.php?section=log');
	        }
	      }
	    else {
	       $error = "Utilisateur inexistant";
	       print_r($username);
	       header('Location: ../index.php?section=log');
	    }

    	

	
   
  	/**public function disconnect() {
      if (isset($_COOKIE['data'])) {
        setcookie("data", "", time() - 3600, "/");
        unset($_COOKIE['data']);
      }
    **/
  ?>