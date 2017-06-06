<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
  <meta charset="utf-8"/>
<head>
	<meta name="viewport" content"width=device-width, initial-scale=1">
	<link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
  <title>test1</title>
</head>
<body>
<<<<<<< HEAD
<?php
                          //mon php !
=======
<?php                          //mon php !
>>>>>>> 5961348fe8bdea3501bcbf67dd225dce366fd8f7
try{
$user = 'root';
$pass= '';
$connect = new PDO ('mysql:host=localhost;dbname=fishblock',$user,$pass);  //new pour initialiser et mes variables de connection $connect!!
   echo ' La base de données est bien connecté.<br/>';

   $password = $_POST['password']; //initialisation des variables du formulaire ça c'est clean !
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
<<<<<<< HEAD
=======
   $telephone = $_POST['telephone'];
>>>>>>> 5961348fe8bdea3501bcbf67dd225dce366fd8f7
   $email = $_POST['email'];

//var_dump($_POST); //I like to see what I push !
}
catch (PDOException $e){                           //mon catch pour les erreurs de connection
  echo "probléme : ".$e;
}
try {
    $connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//appel de ma DB
    $connect->beginTransaction();
  //requete pour entrer les données dans la base insert into !
   $requete= "INSERT INTO users ( password, nom, prenom, adresse, email) VALUES ('".$password."','".$nom."', '".$prenom."', '".$adresse."', '".$email."' )";                                 //syntaxe tordue('".$x----."') !
   $connect->exec($requete);
   $connect->commit();                     //pour excécuter la requète
     echo  'Saisie enregistrée dans la base de données.<br/>';
   }
catch (PDOException $e){                              //mon exception avec rollback
   $connect->rollback();
<<<<<<< HEAD
      echo "erreur :".$e->getmessage();
  }
=======
  echo "erreur :".$e->getmessage();
  }
    if ((isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['nom']) && !empty($_POST['nom']))&&(isset($_POST['prenom'])&& !empty($_POST['prenom']))&&(isset($_POST['adresse'])&& !empty($_POST['adresse'])) )
     {
    echo'Test de validation formulaire ok le programme continue...'."<br/>";
      }
   else{
    echo '<a href="inscription".php">Vous devez renseigner le formulaire d\'inscription fishblock connection  ! cliquer sur ce lien SVP</a><br/>'; //sinon retour au formulaire !
      }
                                       // ma syntaxe pour valider mes nouvelles variables encours !
>>>>>>> 5961348fe8bdea3501bcbf67dd225dce366fd8f7

   $tableau = $_POST['password'].$_POST['nom'].$_POST['prenom'].$_POST['adresse'].$_POST['email'];
   $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);   //rappel de new ma DB
   $connect->beginTransaction();                          //choix beginTransation();
   $requete2 ="SELECT * FROM users";                      // ma select de requete sur l'ensemble de ma db utilisateur
   $connect->commit();
   $resultat =$connect->query($requete2);

   echo "<table>";
   echo "<tr><th>Password</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Email</th></tr>"; //le tableau pour récupérer mes données

   while ($r=$resultat->fetch(PDO::FETCH_ASSOC)){
<<<<<<< HEAD
   //mon while qui recherche mes index de table et affiche mes nom, prenom... avec fletch_ASSOC pour un tableau  associatif ! $r pour créer une nouvelle variable sinon boucle infinie de $resultat !
    echo "<tr><td>". $r['password']."</td><td>".$r['nom']."</td><td>".$r['prenom']."</td><td>".$r['adresse']."</td><td>".$r['email']
    ."</td></tr>";
   }
    echo "</table>";

   if ((isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['nom']) && !empty($_POST['nom']))&&(isset($_POST['prenom'])&& !empty($_POST['prenom']))&&(isset($_POST['adresse'])&& !empty($_POST['adresse'])) )
    {
      echo'Test de validation formulaire ok le programme continue...'."<br/>";
    }
    else{
       //echo'formulaire invalide : vous devez remplir le formulaire !';
        header ("location: inscription.php ?Error=Veuillez renseigner le formulaire !");
    }

    if (isset($_POST['password']) AND $_POST['password']=="azteca1")

    {
       header("location: admin.php ");
    }

    if (($_POST['password']==1) && (strlen($_POST['password']) >= 7) && $_POST['password'] !=="azteca1" || $_POST['nom'] || $_POST['prenom'] || $_POST['adresse'] || $_POST['email'])
    {
       header("location: wall.php ");
    }
=======
   //mon while qui recherche mes index de table et affiche mes nom, prenom, ville avec fletch_ASSOC pour un tableau  associatif ! $r pour créer une nouvelle variable sinon boucle infinie de $resultat !
    echo "<tr><td>". $r['password']."</td><td>".$r['nom']."</td><td>".$r['prenom']."</td><td>".$r['adresse']."</td><td>".$r['email']
    ."</td></tr>";   //je demande d'afficher nom,prenom,  ville et dtad'inscription ds un tableau
   }
   echo "</table>";                          //mon echo fin de tableau


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
         echo "Bienvenue ! ".$prenom.' '.$nom.' : '.$adresse." . Vous êtes membre de Fishblock connection !";
         //condition si valider bienvenue...
        // header("location: wall.php ");  //redirection vers le wall !!
     }
        if (empty($_SESSION)){       //si vide on prévient qu'il faut  saisir !
     //echo  message d'erreur "Veuillez renseigner un nom de produit SVP !" ;
          echo "<p >Veuillez renseigner les champs d'inscription SVP !</p> ";
        }
>>>>>>> 5961348fe8bdea3501bcbf67dd225dce366fd8f7

include("footer_f.php");
?>
</body>
</html>
