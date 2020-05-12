<?php

$db_name = "allocine";
$db_user = "root";
$db_pass = "root";

try {
    $bdd = new PDO('mysql:host=localhost;dbname='.$db_name,$db_user,$db_pass);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


?>