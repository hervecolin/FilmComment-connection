<!--Page série -->
<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
      <meta charset="utf-8"/>
		  <meta name="viewport" content"width=device-width, initial-scale=1">
		  <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
      <title>index_film</title>
</head>
<body>
  <?php
   include ("footer.php");   //include footer
   ?>
  <div class="main">     <!-- class main !!-->
  <main>
  <div class="movies">
          <!--ma class movies -->
    <form>    <!-- mon form de recherche      sans post il est en get par défault-->
    <input type="search" name="q" placeholder ="Rush, ect..."/>
    <input type="submit" value="Rechercher" />
    </form>
 <?php
 include("movies.php");//include movies importanté !!!
 //print_r($movies);    pour voir que passa !
 //die;
 ?>
 <?php if (isset($numResult)):?>  <!-- rejoute une condition sur $numresult est la recherche avec synta alternative avec :-->
 <h3><?= $numResult ?>résultat pour la recherche<?= htmllentities($_GET['q']) ?></h3>;
 <?php endif ?>   <!--fermeture du if avec la syntax alternatif !!-->
 <?php
 if (!empty($_GET['q'])){
 $moviesTemp=[];// creation d'un tableau temporaire, j'affecte mon tabl
     foreach($movies as $movie){
	   $searchResult = stripos($movie['title'], $_GET['q']);  //fonction pour rechercher la premiére lettre de la recherche !
	    if($searchResult !== false){
		      $moviesTemp[] = $movie;
	     }
	  $movies=$moviesTemp;
	 //le nombre de résultats
	  $numResult = count($movies);
    }
 }
   else  {  //s i une recherche vient d'etre effectueé
 shuffle($movies);//mélange les éléments $movie en aléatoire !!
 array_splice($movies,300);
   }            // va donner 300 films au hazard !!
 foreach ($movies as $movie){      // pour afficher tout mes posters au premiers niveau!!!

  echo '<a href="detail_film.php?id='.$movie['id'].'" title="cliquer">';    //attention à la syntaxe de concat pour voir dans l'url id de chaque movie !! // en simple cote mon lien
	 echo '<img src="img/posters/'.$movie['poster'].' ">';  //attention a prendre la $movie que j'ai affecté !!!
	  echo '</a>';    //echo <a> pour cliquer sur le lien !!
 }
 ?>
 </div>
</main>
  </div>
<?php
include("footer_f.php");
?>
  </body>
  </htlm>
