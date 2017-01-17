<?php
session_start();

//INSERT INTO Message (pseudo, date, message) 
    //VALUES ('tortue', 'F', '2009-08-03 05:12:00');

/// Connexion à la base de données

	$pdo = new PDO("mysql:host=localhost;dbname=chatboulette;charset=utf8", "root", "");



// Insertion du message à l'aide d'une requête préparée
$req = $pdo->query('INSERT INTO chat (pseudo, message, date) VALUES("'.$_SESSION['pseudo'].'", "'.$_POST['message'].'", "'.date('Y-m-d H:i:s').'")');

?>
