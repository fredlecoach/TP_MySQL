<?php
// http://192.168.87.59/ajouter-un-etudiant.php

$dns = "mysql:host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "hello";

if(!empty($_POST)){

  $connexion = new PDO($dns, $login, $password);

  $prenom = htmlspecialchars($_POST["prenom"]);
  $nom = htmlspecialchars($_POST["nom"]);
  $mail = htmlspecialchars($_POST["email"]);
  $cv = htmlspecialchars($_POST["cv"]);
  $naissance = ($_POST["naissance"]);
  $admin = htmlspecialchars($_POST["admin"]);

  $sql =  "INSERT INTO etudiants 
  (prenom, nom, email, cv, dt_naissance, isAdmin, dt_mis_a_jour)
  VALUES
  ('$prenom', '$nom', '$mail', '$cv', '$naissance', $admin, NOW()) 
  ";

  $connexion->exec($sql);
}

if(!empty($_POST)){
  echo "L'étudiant <strong>$prenom $nom</strong> a bien été ajouté !";
}
?>

<form method="post">
  <div>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom">
  </div>
  <div>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
  </div>
  <div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
  </div>
  <div>
    <label for="cv">CV</label>
    <input type="file" name="cv" id="cv">
  </div>
  <div>
    <label for="naissance">Date de naissance</label>
    <input  type="date" name="naissance" id="naissance">
  </div>
  <div>
    <label for="admin">Administrateur</label>
    <input type="number" name="admin" id="admin">
  </div>
  <input type="submit" value="Ajouter un étudiant">
</form>