<?php

// http://192.168.87.59/supprimer-un-etudiant.php

$connexion = new PDO("mysql:host=localhost;dbname=module6;charset=utf8", "root", "hello");

$id = $_GET["id"];

$idSupprime = $connexion->exec("DELETE FROM etudiants WHERE id = $id");

if($idSupprime > 0){
  echo "Vous avez bien supprimé le profil de l'étudiant <strong>n°$id</strong> !";
}
else{
  echo "Le profil de l'étudiant <strong>n°$id</strong> sélectionné n'est pas dans la base de donnée.";
}