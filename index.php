<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<!-- tp mot de passe
<h1>Veuillez saisir votre mot de passe</h1>
<form class="" action="cible.php" method="post">
  <p><label>Mot de passe : <input type="password" name="password" /></label></p>
  <p><input type="submit" /></p>
</form>
 fintp -->

<!-- tp mini chat-->
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root');
?>

<h1>Mini chat</h1>
<form class="" action="minichat.php" method="post">
  <p><label>Pseudo : <input type="text" name="pseudo" /></label></p>
  <p><label>Message : <input type="text" name="message" /></label></p>
  <p><input type="submit" /></p>
</form>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root');
$reponse = $bdd->query('SELECT * FROM minichat');
while ($donnees = $reponse->fetch())
{
  echo '<p>'.$donnees["nom"]. . $donnees["message"] .'</p>';
}
$reponse = mysql_query("SELECT * FROM minichat ORDER BY ID DESC LIMIT 0,10");
 '<p>' echo $donnees["pseudo"]; ?></strong> : <?php echo $donnees["message"];'</p>'
 ?>



</body>
</html>
