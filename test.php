<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
  <meta charset="utf-8"/>
<head>
	<meta name="viewport" content"width=device-width, initial-scale=1">
	<link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
  <title>test1</title>
</head>
<body>
<?php
                          //mon php !
try{
$user = 'root';
$pass= '';
$connect = new PDO ('mysql:host=localhost;dbname=fishblock',$user,$pass);  //new pour initialiser et mes variables de connection $connect!!
   echo ' La base de données est bien connecté.<br/>';

   $password = $_POST['password']; //initialisation des variables du formulaire ça c'est clean !
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
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
      echo "erreur :".$e->getmessage();
  }

   $tableau = $_POST['password'].$_POST['nom'].$_POST['prenom'].$_POST['adresse'].$_POST['email'];
   $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);   //rappel de new ma DB
   $connect->beginTransaction();                          //choix beginTransation();
   $requete2 ="SELECT * FROM users";                      // ma select de requete sur l'ensemble de ma db utilisateur
   $connect->commit();
   $resultat =$connect->query($requete2);

   echo "<table>";
   echo "<tr><th>Password</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Email</th></tr>"; //le tableau pour récupérer mes données

   while ($r=$resultat->fetch(PDO::FETCH_ASSOC)){
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

include("footer_f.php");
?>
</body>
</html>
