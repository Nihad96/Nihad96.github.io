<?php

// Connexion � la base de donn�es

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $conn = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '', $pdo_options);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}



$sql = "SELECT * FROM destinations WHERE destinations LIKE %':recherche'% OR commentaire LIKE %':recherche'% ORDER BY date DESC";

$result = $conn->prepare($sql);
$result->bindParam(':recherche', $_POST['recherche'], PDO::PARAM_STR, 10);

$result->execute();

echo json_encode($result->fetchAll());

?>