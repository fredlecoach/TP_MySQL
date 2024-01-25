<?php

// http://192.168.87.59/afficher-tout-etudiant.php

$dns = "mysql:host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "hello";

$connexion = new PDO($dns, $login, $password);
// var_dump($connexion);

$stmt = $connexion->query("SELECT * FROM etudiants");

$tableau = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table style=\"text-align:center\">
        <tr>
          <th>Prenom</th>
          <th>Nom</th>
          <th>Email</th>
          <th>CV</th>
          <th>Date de naissance</th>
          <th>Administrateur</th>
          <th>Date de mise à jour</th>
        </tr>";

foreach($tableau as $key => $value){
  echo "
        <tr>
          <td>$value[prenom]</td>
          <td>$value[nom]</td>
          <td>$value[email]</td>
          <td>$value[cv]</td>
          <td>$value[dt_naissance]</td>
          <td>$value[isAdmin]</td>
          <td>$value[dt_mis_a_jour]</td>
        </tr>          
          ";
}

echo "</table>";

?>




</form>