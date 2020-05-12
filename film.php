<?php 
            require 'templates/header.php';
	      		require 'connect/connect.php';
            require_once 'app/models/Film.class.php';
            require_once 'app/controllers/FilmManager.class.php';
            require_once 'app/models/Genre.class.php';
            require_once 'app/controllers/GenreManager.class.php';
            require_once 'app/models/Realisateur.class.php';
            require_once 'app/controllers/RealisateurManager.class.php';
            require_once 'app/models/Acteur.class.php';
            require_once 'app/controllers/ActeurManager.class.php';
          

            $managerFilm = new FilmManager($bdd);
            $lefilm = $managerFilm->get($id);

            $managerGenre = new GenreManager($bdd);
            $genres = $managerGenre->get($id);

            $managerActeur = new ActeurManager($bdd);
            $acteurs = $managerActeur->get($id);

            $managerRealisateur = new RealisateurManager($bdd);
            $lerealisateur = $managerRealisateur->get($id);
          

                ?>
  
<section style="margin-top: 50px; color: white;">

<main class="content">
			<div class="single">

				<section class="movie">
					<img src ="<?php echo $lefilm->getAffiche_film(); ?> " class="film_affiche">
					<ul>
						<li><?php echo $lefilm->getTitre_film(); ?></li>
            <li><?php echo $lefilm->getSynopsis_film();  ?></li>
            
            <li class="virgule">Genres : <?php foreach ($genres as $genre) { ?><a href="genre.html"><?php  echo $genre->getLibelle_genre(); ?></a> <?php  } ?> </li>
            
            <?php if(!empty($acteurs)){ ?>
                <li class="virgule">Acteurs : <?php foreach ($acteurs as $acteur) { ?><a href="cast.html"><?php  echo $acteur->getPrenom_acteur().' '.$acteur->getNom_acteur();?></a><?php  } ?></li>
            <?php } ?>
            
            <li>Réalisateur : <a href="realisateur.html"><?php echo $lerealisateur->getPrenom_realisateur().' '.$lerealisateur->getNom_realisateur() ?></a></li>
						<li>Date de sortie : <?php echo $lefilm->getAnnee_film(); ?></li>
					</ul>
        </section>
        
        <section class="trailer">
					<h3>Trailer</h3>
					<div class="trailer_frame">
						<video controls height="400px" width="100%"><source src="<?php echo $lefilm->getBande_annonce_film(); ?> " type="video/mp4"></video>
					</div>
        </section>
        
        
				
			</div>
		</main>

</section>

<?php 


require_once 'templates/footer.php';

$bdd->closeCursor();
exit();



?> 

  

           
		




    