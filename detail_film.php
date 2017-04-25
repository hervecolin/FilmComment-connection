<!DOCTYPE html>
<html lang="fr">   <!--normal la langue-->
<head>
         <meta charset="utf-8"/>
		     <meta name="viewport" content"width=device-width, initial-scale=1">
		     <link rel="stylesheet" style="text/css" href="style.css"/>
         <title>detail_serie</title>
</head>

<body>
  <a href ="https://twitter.com/EcoleIMIE"> <img src = "imgres.png"  class="logo"/></a> <!--lien vers forum !!-->
  <div class="reseau">                  <!-- div réseau sociaux-->
          <a href="https://twitter.com/login"><img class="twiter" src ="logo_twiter.jpg"/></a>
  			  <a href="https://fr-fr.facebook.com/login/"><img class="face" src ="logo_face.png"/></a>
  			  <a href="https://www.linkedin.com/uas/login"><img class="link" src ="logo_link.png"/></a>
  				<a href="https://www.deezer.com/fr/"><img class="deezer" src ="logo_deezer.png"/></a>
  				<a href="https://www.spotify.com/fr/"><img class="spotify" src ="logo_spotify_2.png"/></a>
  </div>
<main>
  <h1>Notification de votre série : Fishblock Connection !</h1> <!--mon titre-->
  <?php
 include("movies.php");     // ne pas oublier include de la table "movies.php ma source !" !!
 ?>
  <!--print_r($movies) pour voir ma variable $movies ! -->
 <?php
  $id=$_GET['id'];   // attention $id=$_get['id'] avant d'afficher ma recherche par le clique !!
  foreach ($movies as $movie){   //même synt que sur index pour déclarer !!
	  //est-ce que la serie est le même que celui de l'url
	  //si oui c'est la bonne serie
    if ($movie['id']==$id){           //attention à la condition ['id']==$id !!!
    	  echo '<h2>'.$movie['title'].' - '.$movie['year'].'</h2>';   //je concat mes différents champs ici title et 'year'
    	  echo '<img class="poster_2" src="img/posters/'.$movie['poster'].' ">';
        echo	'<p class="plot">' .'Synopsis : '.$movie['plot'] .'</p>' ; //encore concat !!
    	  echo	'<p class="cast">'. ' Actors : '.$movie['cast'] .'</p>' ;   //idem
    	  echo	'<p class="rating">'.'Note : ' .$movie['rating'].' - '.' Votes : '.$movie['votes'].'</p>'; // spécial concat
    }
  }
 ?>
 </main>
  <div class="user_commantaire" >
    <form  method="POST" action="cible.php">  <!--Envoi du formulaire vers cible.php !-->
       <label>Commanter des séries !</label>
       <textarea name = "commantaire"/></textarea> <!--le formulaire commantaire -->
       <label>Noter une série !</label>
       <input type="text" name = "note" /> <!--le formulaire note -->
	     <label>Mon pseudo</label>
	     <input type="text" name = "pseudo" /> <!--pseudo du commantaire-->
       <input type = "submit" value = "Valider" class="valider"/>
    </form>
  </div>
  <?php
  include("footer_f.php");    //mon footer reel
  ?>
  </body>

  </htlm>
