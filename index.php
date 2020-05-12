<?php 
	include 'templates/header.php'; 	
	require 'connect/connect.php';
	require 'app/models/Film.class.php';
	require 'app/controllers/FilmManager.class.php';		?>

		<div class="homeslider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="images/slider/poster1.jpg">
						<div class="caption">
						</div>
					</div>
					<div class="swiper-slide">
						<img src="images/slider/poster3.jpg">
						<div class="caption">
						</div>
					</div>
					<div class="swiper-slide">
						<img src="images/slider/poster2.jpg">
						<div class="caption">
						</div>
					</div>
				</div>
			
				<div class="swiper-pagination"></div>
			</div>
		</div>

		<main class="content">
			<section class="panel">
				<h2>Recently Added</h2>
				<div class="recentslider">
					<div class="swiper-container">
						<div class="swiper-wrapper" style="display: flex;align-items: center;">
							  <?php 
		  
							
								$manager = new FilmManager($bdd);
								$films = $manager->getList();

									if ($films) {
										foreach ($films as $film) { ?>
										<div class="swiper-slide"><a href="<?php  echo 'film.php?id_film='.$film->getId_film(); ?>"><img src="<?php  echo $film->getAffiche_film(); ?>"><h3 class="hometitle"><?php  echo $film->getTitre_film(); ?></h3></a></div>
	
									<?php
										}
									} else {
										echo '<tr>';
										echo '<td>Nous n\'avons plus de film à voir.</td>';
										echo '</tr>';
									}

								?>
							
					

							<div class="swiper-slide"><a href="CRUD/add.php"><img src="img/plus.png"></a></div>
						</div>
						<div class="nextdirection recent-next"><img src="img/right-arrow.svg"> </div>
						<div class="leftdirection recent-prev"><img src="img/left-arrow.svg"> </div>
					</div>
				</div>
			</section>
<!-- 
			<section class="panel">
				<h2>Most Watched</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><a href="single.html"><img src="images/9.jpg"><h3 class="hometitle">Space Betwen Us</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/2.jpg"><h3 class="hometitle">John Wick</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/3.jpg"><h3 class="hometitle">Spider-Man Homecoming</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/4.jpg"><h3 class="hometitle">Beauty and the Beast</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/5.jpg"><h3 class="hometitle">Pirates of the Caribbean: Dead Men Tell No Tales</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/6.jpg"><h3 class="hometitle">Fifty Shades Darker</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/7.jpg"><h3 class="hometitle">Transformers: The Last Knight</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/8.jpg"><h3 class="hometitle">xXx: Return of Xander Cage</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/9.jpg"><h3 class="hometitle">Space Betwen Us</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/2.jpg"><h3 class="hometitle">John Wick</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/3.jpg"><h3 class="hometitle">Spider-Man Homecoming</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/4.jpg"><h3 class="hometitle">Beauty and the Beast</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/5.jpg"><h3 class="hometitle">Pirates of the Caribbean: Dead Men Tell No Tales</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/6.jpg"><h3 class="hometitle">Fifty Shades Darker</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/7.jpg"><h3 class="hometitle">Transformers: The Last Knight</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/8.jpg"><h3 class="hometitle">xXx: Return of Xander Cage</h3></a></div>

							<div class="swiper-slide"><a href="mostwatched.html"><img src="img/others.png"></a></div>
						</div>
						<div class="nextdirection most-next"><img src="img/right-arrow.svg"> </div>
						<div class="leftdirection most-prev"><img src="img/left-arrow.svg"> </div>
					
					</div>
				</div>
			</section>

			<section class="panel">
				<h2>Top Rated</h2>
				<div class="topslider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><a href="single.html"><img src="images/9.jpg"><h3 class="hometitle">Space Betwen Us</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/2.jpg"><h3 class="hometitle">John Wick</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/3.jpg"><h3 class="hometitle">Spider-Man Homecoming</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/4.jpg"><h3 class="hometitle">Beauty and the Beast</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/5.jpg"><h3 class="hometitle">Pirates of the Caribbean: Dead Men Tell No Tales</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/6.jpg"><h3 class="hometitle">Fifty Shades Darker</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/7.jpg"><h3 class="hometitle">Transformers: The Last Knight</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/8.jpg"><h3 class="hometitle">xXx: Return of Xander Cage</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/9.jpg"><h3 class="hometitle">Space Betwen Us</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/2.jpg"><h3 class="hometitle">John Wick</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/3.jpg"><h3 class="hometitle">Spider-Man Homecoming</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/4.jpg"><h3 class="hometitle">Beauty and the Beast</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/5.jpg"><h3 class="hometitle">Pirates of the Caribbean: Dead Men Tell No Tales</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/6.jpg"><h3 class="hometitle">Fifty Shades Darker</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/7.jpg"><h3 class="hometitle">Transformers: The Last Knight</h3></a></div>
							<div class="swiper-slide"><a href="single.html"><img src="images/8.jpg"><h3 class="hometitle">xXx: Return of Xander Cage</h3></a></div>

							<div class="swiper-slide"><a href="mostwatched.html"><img src="img/others.png"></a></div>
						</div>
						<div class="nextdirection top-next"><img src="img/right-arrow.svg"> </div>
						<div class="leftdirection top-prev"><img src="img/left-arrow.svg"> </div>
			
					</div>
				</div>
			</section> -->

			
		</main>

		<?php require_once 'templates/footer.php'; ?>



	


