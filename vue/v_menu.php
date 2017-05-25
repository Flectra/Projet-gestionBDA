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