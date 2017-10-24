<?php include("include/header.php") ?>

<div>
  <h2 class="center">A l'affiche</h2>
  <p class="center">Retrouvez ici tous les films actuellement diffusés dans les salles</p>
</div>

<section id="accueil">

  <?php 

     // je vais chercher la liste des films
     while ($donnees = $films->fetch(PDO::FETCH_ASSOC))

      {

  ?>
    <div class="enfantAccueil">
      <h3><?php echo $donnees['movie_title']; ?></h3>
      <a href="#"><img class="imagesAccueil" src="assets/images/affiches/<?php echo $donnees['movie_img']; ?>" alt=""></a>
      <p><a href="#">En savoir plus ></a></p>
      <p><?php echo $donnees['movie_genre']; ?></p>
    </div>

<?
}

$films->closeCursor(); // Termine le traitement de la requête
?>

</section>



<?php  include("include/footer.php")?>
