<?php

// Connexion � la base de donn�es

include('sql_connexion_bdd.php');



$sql = "SELECT * FROM destinations WHERE destinations LIKE %':recherche'% OR commentaire LIKE %':recherche'% ORDER BY date DESC";

$result = $conn->prepare($sql);
$result->bindParam(':recherche', $_POST['recherche'], PDO::PARAM_STR, 10);

$result->execute();

echo json_encode($result->fetchAll());

?>