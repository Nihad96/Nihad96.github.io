<?php

// Connexion � la base de donn�es

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $conn = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '', $pdo_options);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}



$sql = "SELECT * FROM destinations ORDER BY date DESC";
$result = $conn->query($sql);

echo json_encode($result->fetchAll());

?>