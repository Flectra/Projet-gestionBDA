<!DOCTYPE html>
<html>
	<head>
		<title> Page d'accueil BDA </title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include_once("vue/v_header.php")
		?>
		<div class="row">
			<div class="col-xs-offset-2 col-xs-8">
			<nav class="row col-xs-offset-3 col-xs-6">
	          <ul class="nav nav-justified">
	            <li class="active"><a href="#">Accueil</a></li>
	            <li><a href="index.php?section=club">Clubs BDA</a></li>
	            <li><a href="#">A venir</a></li>
	            <li><a href="#">Test</a></li>
	          </ul>
	        </nav>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
			<h1>Bienvenue sur le site de gestion du BDA</h1>
			</div>
		</div>
		<div class = "row">
			<div class="col-xs-offset-2 col-xs-7">
			 <p class="lead " margin="50px">Ici il y aura le texte de présentation BDA</p>
			</div>
		</div>


		
	</body>
</html>