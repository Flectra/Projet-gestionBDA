<!DOCTYPE html>
<html>
	<head>
		<title> Clubs BDA </title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="includes/carrousel.js"></script>
	</head>
	<body>
		<header class="col-xs-12" text-align="center">
			<div class="row">
				<img  class = " col-xs-offset-1 col-xs-2 " src=images/BDA.jpeg alt="logo du BDA" width=70px height=auto/>
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
					if ($connected ==false){
						echo '<a class="btn btn-danger" href="index.php?section=log" role="button">Log in</a>';
					}
					else{
						echo '<a class="btn btn-danger" href="index.php?section=login" role="button">Log out</a>';?>
						<br>
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
	            <li><a href="index.php">Accueil</a></li>
	            <li class="active"><a href="#">Clubs BDA</a></li>
	            <li><a href="index.php/vue/v_test.php">A venir</a></li>
	            <li><a href="#">Test</a></li>
	          </ul>
	        </nav>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-2 col-xs-7">
			<h1>Les clubs, leur respo et leurs coordonnées</h1>
			</div>
		</div>
		<div class = "row">
			<div class="col-xs-offset-3 col-xs-6">
			<div id="carrousel" style="text-align:center">
			    <ul>
			    	<?php 
				foreach($AllClub as $club){
					$pagefb=$club['pagefb'];
					$nomclub=$club['nomclub'];
					$descriptif=$club['descriptif'];
					$urlimage=$club['urlimage'];?>
					<li>
						<div align="center">
							<h3><?php echo($nomclub); ?></h3>
							</br>
							<h4>Page Facebook : <?php echo("<a href=".$pagefb."> ".$nomclub."</a>");?>
							</br>
							</br> 
							 Descriptif : <?php echo($descriptif); ?></h4><img src=images/deco2.jpg z-index="10">
							<button class="btn btn-danger" onclick="$('#exemple_fadein').fadeIn();">Create Club</button>
							<button class="btn btn-danger" onclick="$('#exemple_fadein').fadeIn();">Modify Club</button>
							<button class="btn btn-danger" method="post" action="controleur/c_gestionClub.php" name="delete" role="button">Delete</button>
							<a class="btn btn-danger" href="index.php?section=log" role="button">Modify Respo</a>		
					</div></li>
				<?php } ?>

			    
			    	
			    </ul>
			</div>


		    <a class="left carousel-control prev" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control next" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
			</div>

			<div class ="col-xs-offset-4 col-xs-4" id="exemple_fadein" style="background:#c0c0c0 ;padding:20px;display:none;z-index:10001;position:absolute;height:auto ;width:auto;" align="center">
							<form name="htmlform" method="post" action="controleur/c_gestionClub.php">
								<table width="450px" valign="top">
								
								<tr>
								 <td valign="top">
								  <label for="nomclub">Nom Club</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="nomclub" maxlength="50" size="30">
								 </td>
								</tr>
								 
								<tr>
								 <td valign="top"">
								  <label for="pageFB">Page facebook(URL)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="pageFB" maxlength="200" size="30">
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="URLimage">URL image (facultatif)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="URLimage" maxlength="80" size="30">
								 </td>
								 
								</tr>
								<tr>
								 <td valign="top">
								  <label for="descriptif">Descriptif</label>
								 </td>
								 <td valign="top">
								  <textarea  name="descriptif" maxlength="500" cols="30" rows="6"></textarea>
								 </td>
								 
								</tr>
								<tr>
								 <td colspan="2" style="text-align:center">
								  <input type="submit" value="Submit"> 
								  <button type="button" onclick="$('#exemple_fadein').fadeOut();">Fermer cette fenêtre<button> 
								 </td>
								</tr>

							</table>

							</form>
							
					        
					</div>

		</div>


		
	</body>
</html>