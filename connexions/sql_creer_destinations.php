<?php

// Connexion � la base de donn�es

include('sql_connexion_bdd_local.php');

$url = $_POST['creer_photo'];
$message_erreur = '';

$explode_point;

// ne fonctionne pas
if(   (strpos($url, 'http://') !== 0)    OR    (strpos($url, 'https://') !== 0)    ) {
    // $message_erreur = 'L\'url ne commence pas par http:// ou https://';
}


if($message_erreur == '') {
    if(strpos($url, '//') == true) {
        $explode_slash = explode($url, '//');
    }
    else {
        $message_erreur = 'Pas de //';
    }
}


if($message_erreur == ''){
      if(strpos($url, '.') == true) {
          $explode_point = explode($explode_slash[1], '.');
      }
      else {
          $message_erreur = 'Pas de .';
      }
}




// cela signifie qu'après les //, avant le . il y a au moins 2 caractères
if($message_erreur == '') {
    if(!count($explode_point[0]) > 1) {
        $message_erreur = 'Moins de 2 caractères avant le point';
    }
}

if($message_erreur == '') {
    if(!count($explode_point[1]) > 1) {
        $message_erreur = 'Moins de 2 caractères après le point';
    }
}


if($message_erreur == '') {
    $sql = "INSERT INTO destinations (destination, date, commentaire, photo) VALUES (:creer_destination, :creer_date, :creer_commentaire,
:creer_photo)";

    $result = $conn->prepare($sql);
    $result->bindParam(':creer_destination', $_POST['creer_destination'], PDO::PARAM_STR, 30);
    $result->bindParam(':creer_date', $_POST['creer_date']);
    $result->bindParam(':creer_commentaire', $_POST['creer_commentaire'], PDO::PARAM_STR, 1000);
    $result->bindParam(':creer_photo', $_POST['creer_photo'], PDO::PARAM_STR, 255);
    $result->execute();
    echo $conn ->lastInsertId();
}
else {
    echo ($message_erreur);
}


/* echo json_encode($results->fetchAll()); */

?>