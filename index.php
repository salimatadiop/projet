<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>formulaire</title>
</head>
<body>

<form action="formulaire.php" method="post" id="form">
    <h1><u>FORMULAIRE D'INSCRIPTION</u></h1>
    <p>
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom">
    </p>
    <p>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom">
    </p>
    <p>
        <label for="datenais">Date Naissance:</label>
        <input type="date" name="datenais" id="datenais">
    </p>
    <p>
        <label for="lieu">Lieu de Naissance:</label>
        <input type="text" name="lieu" id="lieu">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="filiere">Formation Choisi:</label>
        <p>
           <input type="radio" name="filiere" value="Développement Web" >Développement Web
           <input type="radio" name="filiere" value="Transformation Lait">Transformation Lait
           <input type="radio" name="filiere" value="Infographie MultiMedia">Infographie MultiMedia
        </p>
    </p>
   
    <input type="submit" value="Soumetre">
</form>
</body>
</html>
<?php

?>
