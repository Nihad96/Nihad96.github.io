<?php

session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {
    include('connexion/sql_authentification.php');
};

?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <title>Portfolio</title>
        <link href="/portfolio/css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="images/favicon.png">

    </head>
    <body>
        <navbar id="nav">
            <div id="profile">
                <a id="accueil" href="/portfolio/index.php">↜ Accueil</a>
            </div>
            <!--<img src="images/profile.jpg" alt="profile" id="profile">-->
            
            <div id="nav_container">
                <?php if(isset($_SESSION['nom'])) { ?>
                    <p id="nav_name"><?php echo $_SESSION['nom']; $_SESSION['prenom'];?></p><?php }
                else {
                    ?><p id="nav_connect" onclick="afficher_authentification()">Connectez vous</p>
                <?php } ?>
                <p id="nav_text"><?php echo $page ?></p>
            </div>
        </navbar>