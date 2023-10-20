<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Premier formulaire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php


echo "<h3>Bonjour ! C'est mon premier PHP</h3>";

$nom=$_REQUEST["nom"];
$prenom=$_REQUEST["prenom"];
$password=$_REQUEST["mdp"];
echo $nom." ".$prenom. " est sympa";
?>

</body>
</html>
