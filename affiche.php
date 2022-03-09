<link rel="stylesheet" href="style.css" />
<style>
  table tr:nth-child( odd ){background-color : grey;
                    color: white;}
   table tr:nth-child(even ){
                  background-color : gainsboro;
                  color: black;
                  }

</style>
<?php
$link =mysqli_connect("localhost","root","","formulaire");

$sql = "SELECT * FROM personne ";
if($result = mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo "<h1><u>LISTE DES TABLES ENREGISTRES AVEC SUCCES</u></h1>";
        echo "<table style='width:100%;
        border-collapse:collapse;
        pardin:10px;
        border:2px solid black;
      
        font-size:20px';>";
         echo    "<tr style='border:2px solid black;color:black'>";
                echo "<th style='border:2px solid black;'>Nom</th>";
                 echo"<th style='border:2px solid black;'>Prénom</th>";
                 echo "<th style='border:2px solid black;'>Date de naissance</th>";
                 echo "<th style='border:2px solid black;'>Lieu de naissance </th>";
                 echo "<th style='border:2px solid black;'>Formation choisie</th>";
                 echo"<th style='border:2px solid black;'>Email</th>";
            echo"</tr>";
             while($row =mysqli_fetch_array($result)){
                 echo "<tr style='border:2px solid black;'>";
                 echo "  <td style='border:2px solid black;'>" .$row['nom']. "</td>";
                 echo "  <td style='border:2px solid black;'>" .$row['prenom']. "</td>";
                 echo "  <td style='border:2px solid black;'>" .$row['datenais']. "</td>";
                 echo "  <td style='border:2px solid black;'>" .$row['lieu']. "</td>";
                 echo "  <td style='border:2px solid black;'>" .$row['filiere']. "</td>";
                 echo "  <td style='border:2px solid black;'>" .$row['email']. "</td>";
                 
               echo  "</tr>";
             }
      echo  "</table>";
      echo"<a href='index.php'><input type='submit' value='Retour'></a>";
        mysqli_free_result($result);
    }
}
mysqli_close($link);
?>