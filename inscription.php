<?php
session_start();       //initialisation de ma session
?>

<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
         <meta charset="utf-8"/>
		  <meta name="viewport" content"width=device-width, initial-scale=1">

		     <link rel="stylesheet" style="text/css" href="styleTableau.css"/> <!--link css-->
              <title>Inscription</title>
</head>

<body>
<?php
include ("footer.php");            //include footer
?>

  <div>
   <form class="formulaire" method="POST" action ="inscription.php">
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
        <label for="tel">Téléphone</label>
        <input type="text" name="telephone" class="telephone"/>
       <input type="submit" value ="Valider" class="valider">
     </fieldset>
   </form>
    <div class="pub">  <!--div accrocher le client !!-->
       <fieldset>
        <legend>4 Bonnes raisons de s'inscrire !</legend>
           <label for="commenter">Commenter une série !</label><br/>
           <img src="photo_4.jpg" width="400px" height="90" /><br/>
           <label for="noter"> Noter des séries !</label><br/>
           <img src="photo_6.jpg" width="400px" height="90" /><br/>
           <label for="proposer">Proposer des séries !</label><Br/>
           <img src="photo_10.jpg" width="400px" height="90"/><br/>
           <label for="modérateur">Devenir membre modérateur !</label><br/>
           <img src="photo_16.jpg" width="400px" height="90"/>
        </fieldset>
   </div>
		<br/>
<?php                          //mon php !
   $password = $_POST['password']; //initialisation des variables du formulaire ça c'est clean !
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];

   $_SESSION = $password.$nom.$prenom.$adresse.$telephone.$email; //initialisation de ma session good
    if (empty($_SESSION)){   // condition si champs non valider
   $_SESSION =[];
    }
     else{
         echo "<p>Bienvenue ! ".$prenom.' '.$nom.' : '.$adresse." Vous êtes membre de Fishblock connection ! </P>";
         //condition si valider bienvenue...
         header("location: wall.php ");  //redirection vers le wall !!
     }
        if (empty($_SESSION)){       //si vide on prévient qu'il faut  saisir !
     //echo  message d'erreur "Veuillez renseigner un nom de produit SVP !" ;
          echo "<p >Veuillez renseigner les champs d'inscription SVP !</p> ";
        }
 ?>
<?php
include("footer_f.php");
?>
</body>
</html>
