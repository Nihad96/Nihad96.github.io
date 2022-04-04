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
        $nom = $tableau_utilisateurs[$i]['nom'];
        $prenom = $tableau_utilisateurs[$i]['prenom'];
        $pseudo = $tableau_utilisateurs[$i]['pseudo'];
        break;
    }
}

if($acces == true) {
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['pseudo'] = $pseudo;
}
else {
    include('js/echec_authentification.php');
}