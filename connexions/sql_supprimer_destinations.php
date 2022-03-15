<?php

// Connexion � la base de donn�es

include('sql_connexion_bdd_local.php');




$sql = "DELETE FROM destinations WHERE id = :supprimer_id";

$result = $conn->prepare($sql);
$result->bindParam(':supprimer_id', $_POST['supprimer_id'], PDO::PARAM_INT, 11);
$result->execute();



echo'done';


/* echo json_encode($results->fetchAll()); */

?>