<?php
// Récupération des données soumises par le formulaire
$id = $_POST['id'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$age = $_POST['age'];
$role = $_POST['role'];

// Connexion à la base de données
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'quizzeo';
$connexion = new mysqli($host, $user, $password, $database);

// Insertion des données dans la table
$sql = "INSERT INTO ma_table (nom, email, age) VALUES ('$nom', '$email', '$age')";
$resultat = $connexion->query($sql);

if ($resultat === false) {
  echo "Une erreur est survenue lors de l'insertion des données : " . $connexion->error;
} else {
  echo "Les données ont été enregistrées avec succès !";
}

// Fermeture de la connexion
$connexion->close();
?>