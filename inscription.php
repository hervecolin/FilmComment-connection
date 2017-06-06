<?php
session_start();       //initialisation de ma session
?>

<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
         <meta charset="utf-8"/>
		  <meta name="viewport" content"width=device-width, initial-scale=1">

		     <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
              <title>Inscription</title>
</head>

<body>
  <h1>Fishblock Connection !</h1>


  <div>
   <form class="formulaire" method="POST" action ="test.php">
      <fieldset>
       <legend>Inscription </legend>  <!--mon 1ère field -->
        <label for="password">Password</label>
        <input type="password" name="password" class="password"/>
        <br/>
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="nom"/>
        <label for="nom">Prénom</label>
        <input type="text" name="prenom" class="prénom"/>
        <br/>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="adresse"/>
        <label for="email">@</label>
        <input type="text" name="email" class="email"/>
        <br/>
       <input type="submit" value ="Valider" class="valider">
     </fieldset>
   </form>
    <div class="pub">  <!--div accrocher le client !!-->
       <fieldset>
        <legend>4 Bonnes raisons de s'inscrire !</legend>
           <label for="commenter">Commenter une série !</label><br/>
           <img src="img/photo_4.jpg" width="400px" height="90" /><br/>
           <label for="noter"> Noter des séries !</label><br/>
           <img src="img/photo_6.jpg" width="400px" height="90" /><br/>
           <label for="proposer">Proposer des séries !</label><Br/>
           <img src="img/photo_10.jpg" width="400px" height="90"/><br/>
           <label for="modérateur">Devenir membre modérateur !</label><br/>
           <img src="img/photo_14.jpg" width="400px" height="90"/>
        </fieldset>
   </div>
		<br/>
<?php
<<<<<<< HEAD
    include("footer_f.php");
=======
    include("footer_f.php");             
>>>>>>> 5961348fe8bdea3501bcbf67dd225dce366fd8f7
?>

</body>
</html>
