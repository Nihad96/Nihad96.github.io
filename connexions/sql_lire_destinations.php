<?php

// Connexion � la base de donn�es

include('sql_connexion_bdd_local.php');



$sql = "SELECT * FROM destinations ORDER BY date DESC";
$result = $conn->query($sql);

echo json_encode($result->fetchAll());

?>