<?php

// Connexion � la base de donn�es

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $conn = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '', $pdo_options);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}




$sql = "DELETE FROM destinations WHERE id = :supprimer_id";

$result = $conn->prepare($sql);
$result->bindParam(':supprimer_id', $_POST['supprimer_id'], PDO::PARAM_INT, 11);
$result->execute();



echo'done';


/* echo json_encode($results->fetchAll()); */

?>