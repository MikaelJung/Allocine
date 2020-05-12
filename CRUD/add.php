<?php 

session_start();

if(isset($_SESSION['connect'])){

?>    
						
<h1>Ajouter un film</h1>

    <form action="addTraitement.php" method="POST">
  <div class="form-group">
    <label for="titre">Titre du film :</label>
    <input type="text" class="form-control" id="titre" name="titre">
  </div>
   <div class="form-group">
    <label for="annee">Année de sortie :</label>
    <input type="year" class="form-control" id="annee" name="annee">
  </div>
  <div class="form-group">
    <label for="duree">Durée :</label>
    <input type="text" class="form-control" id="duree" name="duree">
  </div>
  <div class="form-group">
    <label for="synopsis">Synopsis :</label>
    <input type="text" class="form-control" id="synopsis" name="synopsis">
  </div>
   <div class="form-group">
    <label for="note">Note (sur 5) :</label>
    <input type="text" class="form-control" id="note" name="note">
  </div>
   <div class="form-group">
    <label for="affiche">Affiche :</label>
    <input type="text" class="form-control" id="affiche" name="affiche">
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
 </div>
</form>

    
</body>
</html>

<?php 

$bdd->closeCursor();
exit(); ?>

<?php 

} 



else {
    header('location: ../index.php');

}





?>




