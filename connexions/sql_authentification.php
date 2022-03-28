<?php

include('sql_connexion_bdd.php');

$query = "SELECT * FROM utilisateurs";

$result = $conn->prepare($query);

$result->execute();
$tableau_utilisateurs = $result->fetchAll(PDO::FETCH_ASSOC);
var_dump($tableau_utilisateurs);

echo password_hash('test', PASSWORD_BCRYPT);
