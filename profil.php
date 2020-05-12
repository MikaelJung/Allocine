<?php

	session_start();

	require 'src/log.php';

	if(!empty($_POST['email']) && !empty($_POST['password'])){

		require 'connect/connect.php';

		// VARIABLES
		$email 			= htmlspecialchars($_POST['email']);
		$password		= htmlspecialchars($_POST['password']);

		// ADRESSE EMAIL SYNTAXE
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			header('location: profil.php?error=1&message=Votre adresse email est invalide.');
			exit();

		}

		// CHIFFRAGE DU MOT DE PASSE
		$password = "aq1".sha1($password."123")."25";

		// EMAIL DEJA UTILISE
		$req = $bdd->prepare("SELECT count(*) as numberEmail FROM user WHERE email = ?");
		$req->execute(array($email));

		while($email_verification = $req->fetch()){
			if($email_verification['numberEmail'] != 1){
				header('location: pofil.php?error=1&message=Impossible de vous authentifier correctement.');
				exit();
			}
		}

		// CONNEXION
		$req = $bdd->prepare("SELECT * FROM user WHERE email = ?");
		$req->execute(array($email));

		while($user = $req->fetch()){

			if($password == $user['password']){

				$_SESSION['connect'] = 1;
				$_SESSION['email']   = $user['email'];

				if(isset($_POST['auto'])){
					setcookie('auth', $user['secret'], time() + 364*24*3600, '/', null, false, true);
				}

				header('location: profil.php?success=1');
				exit();

			}
			else {

				header('location: profil.php?error=1&Impossible de vous authentifier correctement.');
				exit();

			}

		}

	}

?>

	<head>
		<link rel="stylesheet" href="css/profil.css">
	</head>
	<?php include 'templates/header.php'; ?>
	
	<section>
		<div id="login-body">

				<?php if(isset($_SESSION['connect'])) { ?>

					<h1>Bonjour !</h1>
					<?php
					if(isset($_GET['success'])){
						echo'<div class="alert success">Vous êtes maintenant connecté.</div>';
					} ?>
					<p>Qu'allez-vous regarder aujourd'hui ?</p>
					<small><a href="src/logout.php">Déconnexion</a></small>

				<?php } else { ?>
					<h1>S'identifier</h1>

					<?php if(isset($_GET['error'])) {

						if(isset($_GET['message'])) {
							echo'<div class="alert error">'.htmlspecialchars($_GET['message']).'</div>';
						}

					} ?>

					<form method="post" action="profil.php">
						<input type="email" name="email" placeholder="Votre adresse email" required />
						<input type="password" name="password" placeholder="Mot de passe" required />
						<button type="submit">S'identifier</button>
						<label id="option"><input type="checkbox" name="auto" checked />Se souvenir de moi</label>
					</form>
				

					<p class="grey">Première visite sur Netflix ? <a href="inscription.php">Inscrivez-vous</a>.</p>
				<?php } ?>
		</div>
	</section>

	<?php include 'templates/footer.php'; ?>
</body>
</html>