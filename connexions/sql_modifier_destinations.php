<?php

// Connexion � la base de donn�es

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $conn = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '', $pdo_options);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


/* $get_info = "SELECT * FROM destinations WHERE id = :modifier_id"; */


$sql = "UPDATE destinations SET destination = :modifier_destination, date = :modifier_date, commentaire = :modifier_commentaire,
photo = :modifier_photo WHERE id = :modifier_id";

$result = $conn->prepare($sql);
$result->bindParam(':modifier_destination', $_POST['modifier_destination'], PDO::PARAM_STR, 30);
$result->bindParam(':modifier_date', $_POST['modifier_date']);
$result->bindParam(':modifier_commentaire', $_POST['modifier_commentaire'], PDO::PARAM_STR, 1000);
$result->bindParam(':modifier_photo', $_POST['modifier_photo'], PDO::PARAM_STR, 255);
$result->bindParam(':modifier_id', $_POST['modifier_id'], PDO::PARAM_INT, 11);
$result->execute();


echo'done';


/* echo json_encode($results->fetchAll()); */

?>