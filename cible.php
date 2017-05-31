<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
         <meta charset="utf-8"/>
		     <meta name="viewport" content"width=device-width, initial-scale=1">
		     <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
         <title>cible</title>
</head>

<body>
  <?php

  try{
  $user = 'root';
  $pass= '';
  $connect = new PDO ('mysql:host=localhost;dbname=fishblock',$user,$pass);  //new pour initialiser et mes variables de connection $connect!!
     echo ' La base de données est bien connecté.<br/>';


     $commentaire = $_POST['commentaire'];
     $note = $_POST['note'];
     $speudo = $_POST['speudo'];
     $proposer = $_POST['proposer'];


  //var_dump($_POST); //I like to see what I push !
  }
  catch (PDOException $e){                           //mon catch pour les erreurs de connection
    echo "probléme : ".$e;
  }
  try {
      $connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//appel de ma DB
      $connect->beginTransaction();
    //requete pour entrer les données dans la base insert into !
     $requete= "INSERT INTO commentaire (commentaire, note, speudo, proposer) VALUES ('".$commentaire."','".$note."', '".$speudo."', '".$proposer."' )";                                 //syntaxe tordue('".$x----."') !
     $connect->exec($requete);
     $connect->commit();                     //pour excécuter la requète
       echo  'Saisie enregistrée dans la base de données.<br/>';
     }
  catch (PDOException $e){                              //mon exception avec rollback
     $connect->rollback();
    echo "erreur :".$e->getmessage();
    }
      if ((isset($_POST['commentaire']) && !empty($_POST['commentaire'])) && (isset($_POST['note']) && !empty($_POST['note']))&&(isset($_POST['speudo'])&& !empty($_POST['speudo'])) )
       {
      echo'Test de validation formulaire ok le programme continue...'."<br/>";
        }
        else{
         echo '<a href="detail_film.php">Vous devez renseigner le formulaire d\'inscription fishblock connection  ! cliquer sur ce lien SVP</a><br/>'; //sinon retour au formulaire !
           }


     $tableau = $_POST['commentaire'].$_POST['note'].$_POST['speudo'].$_POST['proposer'];
     $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);   //rappel de new ma DB
     $connect->beginTransaction();                          //choix beginTransation();
     $requete2 ="SELECT * FROM commentaire";                      // ma select de requete sur l'ensemble de ma db utilisateur
     $connect->commit();
     $resultat =$connect->query($requete2);

     echo "<table>";
     echo "<tr><th>Commentaire</th><th>Note</th><th>Speudo</th><th>Proposer une serie</th>"; //le tableau pour récupérer mes données

     while ($r=$resultat->fetch(PDO::FETCH_ASSOC)){
     //mon while qui recherche mes index de table et affiche mes nom, prenom, ville avec fletch_ASSOC pour un tableau  associatif ! $r pour créer une nouvelle variable sinon boucle infinie de $resultat !
      echo "<tr><td>". $r['commentaire']."</td><td>".$r['note']."</td><td>".$r['speudo']."</td><td>".$r['proposer']."</td></tr>";   //je demande d'afficher nom,prenom,  ville et dtad'inscription ds un tableau
     }
     echo "</table>";                          //mon echo fin de tableau
    header("location: wall.php ");


  ?>
</body>
</html>
