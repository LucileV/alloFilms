<?php include("include/header.php"); ?>

<h1>Page Par genre</h1>

<?php

$genre = $_GET['genre'];


// Notre requete à la base de donnée
// SELECT = prend moi; * = tout ;FROM = de quel tableau ? film = mettreLeNomDeVotreTable
$reponse = $bdd->query('SELECT movie_title FROM films WHERE movie_genre=\'horreur\' ORDER BY movie_title');
// Pour que mySql ne traite cette réponse ligne par ligne, c'est à dire par entrée.
// fetch veut dire en anglais "va chercher"
// On le met dans une boucle qui va etre répétée autant de fois qu'il y a d'entrée
while ($donnees = $reponse->fetch())
{

echo $donnees['movie_title'] . '<br />';

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>


<?php include("include/footer.php"); ?>
