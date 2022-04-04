<?php

// Connexion � la base de donn�es

include('sql_connexion_bdd.php');

$url = $_POST['creer_photo'];



    $sql = "INSERT INTO destinations (destination, date, commentaire, photo) VALUES (:creer_destination, :creer_date, :creer_commentaire,
:creer_photo)";

    $result = $conn->prepare($sql);
    $result->bindParam(':creer_destination', $_POST['creer_destination'], PDO::PARAM_STR, 30);
    $result->bindParam(':creer_date', $_POST['creer_date']);
    $result->bindParam(':creer_commentaire', $_POST['creer_commentaire'], PDO::PARAM_STR, 1000);
    $result->bindParam(':creer_photo', $_POST['creer_photo'], PDO::PARAM_STR, 255);
    $result->execute();
    echo $conn ->lastInsertId();



/* echo json_encode($results->fetchAll()); */
