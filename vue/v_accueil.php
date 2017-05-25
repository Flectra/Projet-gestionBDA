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
		<header class="col-xs-12" text-align="center">
			<div class="row">
				<img  class = " col-xs-offset-1 col-xs-2 " src=images/BDA.jpeg alt="logo du BDA" width=90px height=auto/>
				<div class = "col-xs-6">
					<div id="fond"> 
				      	<div class="ruban">     
				        	<h2>Gestion du BDA</h2>     
				      	</div>     
					    <div class="ruban_gauche"></div>
					    <div class="ruban_droit"></div>
					</div>
				</div>
				<div class=" col-xs-offset-1 col-xs-2" mergin="50px">
					</br>
					</br><?php 

					if ($connected == false){
						echo '<a class="btn btn-danger" href="index.php?section=log" role="button">Log in</a>';
					}
					else{
						echo '<a class="btn btn-danger" href="index.php?section=logout" role="button">Logged</a>';?>
						<br>
						<?php
						echo '<a class="btn btn-danger" href="index.php?section=login" role="button">Create Admin</a>';?>
						Bonjour, toi !
					<?php	
					}
						
					?>
				</div>
			</div>
		</header>
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