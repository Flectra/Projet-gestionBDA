<?php

		require_once("../modele/m_Utilisateur.php");

		//Récupère tous les input des requetes POST
		$username = isset($_POST['username']) ? $_POST['username'] : "pas de username";
		$password = isset($_POST['password']) ? $_POST['password'] : "pas de password";
		$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : "pas de confirmation password";
		//Crée un objet utilisateur qui sera paramètre de la création
		$utilisateur = new Utilisateur();
		//Déclare une erreur par défaut
		$error="";
		//Essaie de récupérer un utilisateur avec le même username pour une vérifier si le pseudo est déjà pris
		$userWithSameUsername = $utilisateur->getByUsername($username);
		//Vérifie si l'username n'est pas déjà pris
		echo($password);
		echo($confirmPassword);
		if (empty($userWithSameUsername)) {
			//Vérifie si les mots de passes sont conformes
			if ($password === $confirmPassword) {
				//Définit les attributs du futur admin
				$newAdmin=array('username' => $username,
								'password'=> sha1(sha1($password)));
				//Crée un admin via la méthode du modèle utilisateur
				$newAdmin = $utilisateur->createAdmin($newAdmin);
				//Redirige vers la page de connexion
				header('Location: ../index.php?section=log');
		  }
			//Si ils ne sont pas conformes --> signale une erreur + redirection
			else {
				$error = "Mots de passe non conformes";
		    print_r($password);
		    echo'<script>alert("Mot de passe non conforme")</script>';
			}
		}
		//Si le username est déjà pris --> signale une erreur + redirection
		else {
			$error = "Pseudonyme déjà pris";
			echo'<script>alert("Pseudonyme déjà pris")</script>';
			header('Location: ../index.php?section=reg');
		}

		//c4033bff94b567a190e33faa551f411caef444f2

?>
