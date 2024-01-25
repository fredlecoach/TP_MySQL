<?php

// http://192.168.87.59/afficher-un-etudiant.php

$dns = "mysql:host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "hello";

$connexion = new PDO($dns, $login, $password);
// var_dump($connexion);

$id = $_GET["id"];

$stmt = $connexion->query("SELECT id, prenom, nom, email, cv, dt_naissance, isAdmin, dt_mis_a_jour FROM etudiants WHERE id = $id");

echo "
    <table style =\"text-align:center\">
      <tr>
        <th>Id</th>
        <th style =\"padding-left: 20px\">Prenom</th>
        <th style =\"padding-left: 20px\">Nom</th>
        <th style =\"padding-left: 20px\">Email</th>
        <th style =\"padding-left: 20px\">CV</th>
        <th style =\"padding-left: 20px\">Date de naissance</th>
        <th style =\"padding-left: 20px\">Administrateur</th>
        <th style =\"padding-left: 20px\">Date de mise à jour</th>
      </tr>";

foreach($stmt as $key => $value){
  echo "
      <tr >
        <td>$value[id]</td>  
        <td style =\"padding-left: 20px\">$value[prenom]</td>  
        <td style =\"padding-left: 20px\">$value[nom]</td>  
        <td style =\"padding-left: 20px\">$value[email]</td>  
        <td style =\"padding-left: 20px\">$value[cv]</td>  
        <td style =\"padding-left: 20px\">$value[dt_naissance]</td>  
        <td style =\"padding-left: 20px\">$value[isAdmin]</td>  
        <td style =\"padding-left: 20px\">$value[dt_mis_a_jour]</td>
        </tr>";
}

echo "</table>";

if(empty($value[$id])){
  echo "L'étudiant n'est pas dans la base de donnée!";
}
?>

