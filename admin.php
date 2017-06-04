<!--page admin faut voir on peut traiter en base de données privilèges  !-->

<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
      <meta charset="utf-8"/>
      <meta name="viewport" content"width=device-width, initial-scale=1">
      <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
      <title>Administrateur</title>
</head>
<body>

  <br/><!--un peu chavalier ces br++ !-->
  <br/>
  <br/>
  <br/>
     <a class ="accueil" href="index_film.php" >Accueil</a><br/> <!--retour accueil -->
     <a class="moderateur"href="moderateur.php" >Modérateur</a><!--check modérateur-->
     <div class="admin" >
       <h1>Wall Administrateur !</h1>           <!--Titre -->
      </div>
  </body>
<br/>
<br/>
  <div class="message">
    <?php
    include("footer_f.php");          // include footer reel!!
    // $message=$_POST['message'];    //affecte ma variable du formulaire et je la lis !
    // echo $message;
    // include("test.php");
    ?>
  </div>
</html>
