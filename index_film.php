<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
  <meta charset="utf-8"/>
<head>
	<meta name="viewport" content"width=device-width, initial-scale=1">
	<link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
  <title>index_film</title>
</head>
<body>
  <?php
   include ("header.php");   //include foo
   ?>
  <!-- <form class="log_user">
   <input  type="password" name="log_user" placeholder="Mot de passe..."/>
   <input  type="text" name="log_user" placeholder="Identifiant,pseudo..."/>
   <input type="submit" value="ok"/>
   </form> -->
  <div class="main">
  <div class="actu">
    <p>News </p>   <!--mon titre-->
   </div>
 </br>
 </br>
   <div class="movies"><!--ma class movies -->
      <form>    <!-- mon form de recherche sans post il est en get par défault-->
       <input type="search" name="q" placeholder ="kung fu, ect..."/>
       <input type="submit" value="Rechercher" />
      </form>
     <?php
     include("movies.php");
     //print_r($movies);    pour voir que passa !
     ?>
    <?php if (isset($numResult)):?>  <!-- rejoute une condition sur $numresult est la recherche avec synta alternative avec :-->
    <h3><?= $numResult ?>résultat pour la recherche<?= htmllentities($_GET['q']) ?></h3>; <!--ai-je protégé mon appli ?-->
    <?php endif ?>   <!--fermeture du if avec la syntax alternatif !!-->
    <?php
     if (!empty($_GET['q'])){          //si recherche est ok
     $moviesTemp=[];
         foreach($movies as $movie){    //syntax $movies=$movie !!
    	   $searchResult = stripos($movie['title'], $_GET['q']);  //fonction pour rechercher la premiére lettre de la recherche !
    	    if($searchResult !== false){       //boolean on y croit !
    		 $moviesTemp[] = $movie; //syntax soiusk!!
    	    }
    	 $movies=$moviesTemp;
    	 //le nombre de résultats
    	 $numResult = count($movies);  //fonction count php !
        }
     }
       else  {  //s i une recherche vient d'etre effectueé
     shuffle($movies);//mélange les éléments $movie en aléatoire !!
     array_splice($movies,27);
       }            // va donner 24 films au hazard juste pour appater !!
     foreach ($movies as $movie){      // pour afficher tout mes posters au premiers niveau!!!
      echo '<a href="detail_film.php?id='.$movie['id'].'" title="cliquer">';    //attention à la syntaxe de concat pour voir dans l'url id de chaque movie !! // en simple cote mon lien
    	 echo '<img src="img/posters/'.$movie['poster'].' ">';  //attention a prendre la $movie que j'ai affecté !!!
    	  echo '</a>';    //echo <a> je ferme mon <a> pour cliquer sur le lien !!
     }
     ?>
 </div>
  </div>
    <?php
    include("footer_f.php");             //include footer reel
    ?>
  </body>
  </htlm>
