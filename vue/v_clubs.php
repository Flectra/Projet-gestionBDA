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
		<?php
		include_once("vue/v_header.php")
		?>
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
			    //pour chaque club on récupère ses infos ainsi que celles de son respo
				foreach($AllClub as $club){
					$pagefb=$club['pagefb'];
					$nomclub=$club['nomclub'];
					$descriptif=$club['descriptif'];
					$urlimage=$club['urlimage'];
					$idclub=$club['idclub'];
					$respoclub= $respo->getRespobyClub($idclub);
					$inforespo = false;
					if(!empty($respoclub)){
					$nomrespo= $respoclub['firstname']." ".$respoclub['lastname'];
					$mailrespo= $respoclub['mail'];
					$inforespo = true; }
					?>
					<li>
						<div align="center">
							<h3><?php echo($nomclub); ?></h3>
							</br>
							<h4>Page Facebook : <?php echo("<a href=".$pagefb."> ".$nomclub."</a>");?>
							</br>
							</br> 
							 Descriptif : <?php echo($descriptif); 
							 if($inforespo){
							 	echo("</br> </br>Respo : ".$nomrespo. " </br></br> Mail du respo : ".$mailrespo);
							 	}?>
							 </h4><img src=images/deco2.jpg z-index="-1">
							 <?php 
							 if ($connected ==true) {?>
							<button class="btn btn-danger" onclick="$('#creation_club').fadeIn();" >Create Club</button>
							<button class="btn btn-danger" onclick="$('#modification_club').fadeIn();">Modify Club</button>
							<form  method="post" action="controleur/c_deleteclub.php" name="delete" role="button">
							<input type="hidden" name="idclub" value=<?php echo($idclub)?> >
							<input type="submit" value="Delete" type ="button" class="btn btn-danger">
							</form>
							<form  method="post" action="controleur/c_modifyrespo.php" name="delete" role="button">
							<input type="hidden" name="idclub" value=<?php echo($idclub)?> >
							<input type="submit" value="ModifyRespo" type ="button" class="btn btn-danger">
							</form>
							<?php } ?>		
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
			<?php include_once("vue/v_formClub.php") ?>				

		</div>
		
	</body>
</html>