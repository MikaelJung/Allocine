<?php

	if(isset($_COOKIE['auth']) && !isset($_SESSION['connect'])){

		// VARIABLE
		$secret = htmlspecialchars($_COOKIE['auth']);

		// VERIFICATION
		$db_name = "allocine";
		$db_user = "root";
		$db_pass = "root";

		try {
			$bdd = new PDO('mysql:host=localhost;dbname='.$db_name,$db_user,$db_pass);
			$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}


		$req = $bdd->prepare("SELECT count(*) as numberAccount FROM user WHERE secret = ?");
		$req->execute(array($secret));

		while($user = $req->fetch()){

			if($user['numberAccount'] == 1){

				$reqUser = $bdd->prepare("SELECT * FROM user WHERE secret = ?");
				$reqUser->execute(array($secret));

				while($userAccount = $reqUser->fetch()){

					$_SESSION['connect'] = 1;
					$_SESSION['email']   = $userAccount['email'];

				}

			}

		}

	}

	if(isset($_SESSION['connect'])){

		$db_name = "allocine";
		$db_user = "root";
		$db_pass = "root";

		try {
			$bdd = new PDO('mysql:host=localhost;dbname='.$db_name,$db_user,$db_pass);
			$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}


		$reqUser = $bdd->prepare("SELECT * FROM user WHERE email = ?");
		$reqUser->execute(array($_SESSION['email']));

		while($userAccount = $reqUser->fetch()){

			if($userAccount['blocked'] == 1) {
				header('location: logout.php');
				exit();
			}

		}

	}

?>