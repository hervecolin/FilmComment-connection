<!--Page modérateur faut voir on peut traiter en bd privilèges!-->
<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
      <meta charset="utf-8"/>
		  <meta name="viewport" content"width=device-width, initial-scale=1">
		  <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
      <title>Moderateur</title>
</head>
<body>
<footer>
<h1> FishBlock Connection !</h1>
<h2>Séries télévisées: Actu, diffusion, photos, acteurs...</h2>
    <a href ="index_film.php"> <img src = "img/imgres.png"  class="logo"/></a>
	<div class="reseau">
    <a href="https://twitter.com/login"><img class="twiter" src ="img/logo_twiter.jpg"/></a>
		<a href="https://fr-fr.facebook.com/login/"><img class="face" src ="img/logo_face.png"/></a>
		<a href="https://www.linkedin.com/uas/login"><img class="link" src ="img/logo_link.png"/></a>
		<a href="https://www.deezer.com/fr/"><img class="deezer" src ="img/logo_deezer.png"/></a>
		<a href="https://www.spotify.com/fr/"><img class="spotify" src ="img/logo_spotify_2.png"/></a>
  </div>
<br/>
<br/>
<br/>
<br/>
<a class ="accueil" href="index_film.php" >Accueil</a> <!-- retour acueil -->
<div class="moderateur" >
<h3>Wall Modérateur !</h3>   <!--Titre -->
  <div class="mod" >           <!--css-->
    <form method="POST" action="admin.php">  <!--Envoi du formulaire pour l'instant l'admin !-->
     <textarea name = "message" class="message"/></textarea> <!--le formulaire d'échange -->
     <input type = "submit" value = "Valider" class="valider"/>
    </form >
    </div>
 </div>
</body>
<?php
include("footer_f.php"); //include footer
?>
</html>
