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
  $commantaire=$_POST['commantaire'];
  $note=$_POST['note'];
  $pseudo=$_POST['pseudo'];
    echo "<h1>".'Mon commantaire :  '.$commantaire.'<br/>'.'Ma note : '.$note. '<br/>'.'Mon pseudo : '.$pseudo ."</h1>";
  ?>
</body>
</html>
