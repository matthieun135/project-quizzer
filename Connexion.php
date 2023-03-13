<?php
//Connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "ClmdppAdmin";
$dbname = "quizzeo";

//Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

//Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

//Récupération des données du formulaire
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];

//Insertion des données dans la table "reponsesquizz"
$sql = "INSERT INTO reponsesquizz (question1, question2, question3, question4, question5, question6) 
VALUES ('$question1', '$question2', '$question3', '$question4', '$question5', '$question6')";

if ($conn->query($sql) === TRUE) {
    echo "Les réponses ont bien été enregistrées dans la base de données.";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>