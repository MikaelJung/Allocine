<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Movies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/css.css">

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/script.js"></script>


	<!-- Demo styles -->
	<style>



	</style>
</head>
<body>
	<div class="wrapper">

		<header class="header">
			<figure class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo"></figure></a>
			<nav class="menu">
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a>Genres</a>
						<ul>
							<?php 
							require 'connect/connect.php';
							require 'app/models/Genre.class.php';
							require 'app/controllers/GenreManager.class.php';
					
							$manager = new GenreManager($bdd);
							$genres = $manager->getList();

								if ($genres) {
									foreach ($genres as $genre) {
										?>
										<li><a href="<?php  echo 'genre.php?libelle_genre='.$genre->getLibelle_genre(); ?>"><?php echo $genre-> getLibelle_genre();  ?></a></li>
										<?php
									}
								} else {
									echo '<tr>';
									echo '<td>Nous n\'avons plus de film à voir.</td>';
									echo '</tr>';
								}
								?>
						</ul>
					</li>
					<li><a>Annee</a>
						<ul>
							
						</ul>
					</li>
					<li><a href="mostwatched.html">Les plus vus</a></li>
					<li class="mobsearch">
						<form class="mobform">
							<input type="text" name="s" class="mobsearchfield" placeholder="Recherche...">
							<input type="submit" value="" class="mobsearchsubmit">
						</form>
					</li>
				</ul>
			</nav>
			<form class="search">
				<input type="text" name="s" class="searchfield" placeholder="Recherche...">
				<input type="submit" value="" class="searchsubmit">
			</form>
			<a href="profil.php"><img src="img/avatar.png" alt="profil" class="profil_img"></a>
			<div class="toggle"><img src="img/menu.svg"></div>
		</header>