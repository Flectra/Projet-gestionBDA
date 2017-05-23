<?php

require_once("../modele/m_Utilisateur.php");

	$username = isset($_POST['inputEmail']) ? $_POST['inputEmail'] : "pas de username";
	$password = isset($_POST['inputPassword']) ? $_POST['inputPassword'] : "pas de password";

		$utilisateur = new Utilisateur();
		$error="";
		if ($utilisateur = $utilisateur->getByUserName($username)) {
	        if ($password == $utilisateur['password']) {
	          $data = array("username" => $utilisateur["username"],
	                        "role" => "Admin");
	          setcookie("data", $data, time() + (3600 * 25), "/",null, null, false, true);
	          header('Location: ../');
	        }
	        else {
	          $error = "Mot de passe incorrect";
	          header('Location: ../index.php?section=log');
	        }
	      }
	    else {
	       $error = "Utilisateur inexistant";
	       header('Location: ../index.php?section=log');
	    }

	    print_r($username);
	    print_r($password);

    	

	
   
  	/**public function disconnect() {
      if (isset($_COOKIE['data'])) {
        setcookie("data", "", time() - 3600, "/");
        unset($_COOKIE['data']);
      }
    **/
  ?>