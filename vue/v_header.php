<header class="col-xs-12" text-align="center">
			<div class="row">
				<img  class = " col-xs-offset-1 col-xs-2 " src='includes/images/BDA.jpg' alt="logo du BDA" width=90px height=auto/>
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
						echo '<a class="btn btn-danger" href="log" role="button">Log in</a>';
					}
					else{
						echo '<a class="btn btn-danger" href="index.php?section=logout" role="button">Log out</a>';?>
						<br>
						<?php
						echo '<a class="btn btn-danger" href="registration" role="button">Create Admin</a> <br> Bonjour, '.$_COOKIE["data_username"];?>
					<?php	
					}
						
					?>
				</div>
			</div>
		</header>