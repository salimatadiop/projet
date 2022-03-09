<link rel="stylesheet" href="style.css" />
<?php
//creation base de donnees
$link =mysqli_connect("localhost","root","","formulaire");
// creation table
$sql = "CREATE TABLE personne(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom  VARCHAR(255) NOT NULL ,
    prenom VARCHAR(30) NOT NULL ,
    datenais date NOT NULL ,
    lieu VARCHAR(30) NOT NULL ,
    filiere VARCHAR(30) NOT NULL ,
    email VARCHAR(70) NOT NULL UNIQUE 
    )";

//inser table

$nom =mysqli_real_escape_string($link ,$_REQUEST['nom']);
$prenom =mysqli_real_escape_string($link ,$_REQUEST['prenom']);
$datenais =mysqli_real_escape_string($link ,$_REQUEST['datenais']);
$lieu =mysqli_real_escape_string($link ,$_REQUEST['lieu']);
$filiere =mysqli_real_escape_string($link ,$_REQUEST['filiere']);
$email =mysqli_real_escape_string($link ,$_REQUEST['email']);

$sql = "INSERT INTO personne(nom ,prenom ,datenais,lieu,filiere,email) 
       values ('$nom','$prenom','$datenais','$lieu','$filiere','$email')";

if(mysqli_query($link ,$sql)){
    echo "<div style='display:block;
    border-radius:2px;
	padding:20px 30px;
	box-shadow:0 0 15px;
	font-size:14px;
	font-weight:bold;
	width:500px;
	margin:0px 250px 0 350px;
	float:left;
    '>
    <h1><u>Formulaire Enregistré avec succée</u></h1>
    <p class='p'>Merci pour votre attention</p>
    <div style='display:inline;
    width:20px;'>
        <a href='index.php'><input type='submit' value='Retour'></a>
        <a href='affiche.php'><input type='submit'value='Afficher'></a>
    </div>
   
</div>";
}else{
    echo "error $sql" . mysqli_error($link);
}
mysqli_close($link);
?>