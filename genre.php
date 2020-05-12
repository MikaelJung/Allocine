<?php require 'templates/header.php'; 
      $libelle_genre=$_GET['libelle_genre'];

?>



		<main class="content" style="margin-top: 50px; color: white;">
			<section class="panel">
				<h2>Recently Added</h2>
				<div class="recentslider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							  <?php 
		  
		
								require 'connect/connect.php';
								require 'app/models/Film.class.php';
                                require 'app/controllers/FilmManager.class.php';
                                
                                $requete = $bdd->query("SELECT titre_film, affiche_film FROM Film, Genre, possede WHERE Film.id_film = possede.id_film AND possede.id_genre = Genre.id_genre AND libelle_genre ='$libelle_genre'");
                                $donnees = $requete->fetchAll();
							
                            
									foreach ($donnees as $genre){
                               
                                            ?>
										<div class="swiper-slide"><a href=""><img src="<?php  echo $genre['affiche_film']; ?>"><h3 class="hometitle"><?php  echo $genre["titre_film"]; ?></h3></a></div>
	
									<?php
										}
									

								?>
							
					

							<div class="swiper-slide"><a href="mostwatched.html"><img src="img/others.png"></a></div>
						</div>
						<div class="nextdirection recent-next"><img src="img/right-arrow.svg"> </div>
						<div class="leftdirection recent-prev"><img src="img/left-arrow.svg"> </div>
					</div>
				</div>
			</section>


		<?php require_once 'templates/footer.php'; ?>


	


