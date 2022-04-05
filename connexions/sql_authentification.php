<?php

include('sql_connexion_bdd.php');

$query = "SELECT * FROM utilisateurs";

$result = $conn->prepare($query);

$result->execute();
$tableau_utilisateurs = $result->fetchAll(PDO::FETCH_ASSOC);

$acces = false;
for($i=0; $i<count($tableau_utilisateurs); $i++) {
    if($tableau_utilisateurs[$i]['pseudo'] == $_POST['pseudo'] && password_verify($_POST['mot_de_passe'], $tableau_utilisateurs[$i]['mot_de_passe'])) {
        $acces = true;
        $_SESSION['nom'] = $tableau_utilisateurs[$i]['nom'];
        $_SESSION['prenom'] = $tableau_utilisateurs[$i]['prenom'];
        $_SESSION['pseudo'] = $tableau_utilisateurs[$i]['pseudo'];

        break;
    }
}
