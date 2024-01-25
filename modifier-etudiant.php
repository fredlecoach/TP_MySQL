<?php

// http://192.168.87.59/modifier-etudiant.php

$connexion = new PDO('mysql:host=localhost;dbname=module6;charset=utf8', 'root', 'hello');


if(!empty($_POST)){

$id = $_POST["id"];
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$cv = $_POST["cv"];
$naissance = $_POST["naissance"];
$admin = $_POST["admin"];

$sql = "UPDATE etudiants
        SET prenom = '$prenom' ,nom = '$nom', email = '$email',cv = '$cv', dt_naissance = '$naissance', isAdmin = $admin
        WHERE id = $id
        ";

      $nbLignes = $connexion->exec($sql);
      if($nbLignes === 1){
        echo "L'étudiant <strong>n°$id</strong> a été mis à jour ! <br><br>";
      }
}

$id = $_GET["id"];

$stmt = $connexion->query("SELECT * 
                          FROM etudiants
                          WHERE id = $id");

$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!----------------- formulaire  -------------->

<form method="post">
  <input type="hidden" name="id" value="<?php echo $etudiant["id"] ?>" >

  <div>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo $etudiant["prenom"] ?>">
  </div>
  <div>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?php $etudiant["nom"] ?>">
  </div>
  <div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="<?php echo $etudiant["email"] ?>">
  </div>
  <div>
    <label for="cv">CV</label>
    <input type="file" name="cv" id="cv" value="<?php echo $etudiant["cv"] ?>">
  </div>
  <div>
    <label for="naissance">Date de naissance</label>
    <input type="date" name="naissance" id="naissance" value="<?php echo $etudiant["dt_naissance"] ?>">
  </div>
  <div>
    <label for="admin">Administrateur</label>
    <input type="number" name="admin" id="admin" value="<?php echo $etudiant["isAdmin"] ?>">
  </div>
  
  <input type="submit" value="Modifier l'étudiant">


</form>