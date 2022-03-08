<?php
$page = 'Destinations';
echo
'<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <title>Destinations</title>
        <link href="css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>';

    include ('navbar.php');

    

    echo'<div id="content">
            <div style="width:calc(100% - 30px); display:flex; justify-content:space-around; color:black; margin: auto">
                <button id="bouton_creer_destination" class="bouton" type="button" onclick="afficher_creer_destination()">Ajouter une destination</button>
                </div>
        </div>';
    /* include ('connexions/read_destinations.php'); */

    echo'<form class="form" id="form_creer_destination" onsubmit="return fonction_creer_destination();">
            <div class="form_content">
                <img src="icons/fermer.png" id="fermer_creer_destination" alt="fermer" onclick="cacher_creer_destination()">
                <h3>Créer une nouvelle destination</h3>
                <input type="text" id="creer_destination" name="creer_destination" maxlength="30" class="form_lign" placeholder="Destination">
                <input type="date" id="creer_date" name="creer_date" class="form_lign">
                <input type="text" id="creer_commentaire" name="creer_commentaire" maxlength="1000" class="form_lign" placeholder="Commentaire">
                <input type="text" id="creer_photo" name="creer_photo" maxlength="255" class="form_lign" placeholder="URL photo">
                <input type="submit" id="creer_valider" class="form_lign form_valider">
            </div>
        </form>

        <form class="form" id="form_modifier_destination" onsubmit="return fonction_modifier_destination();">
            <div class="form_content">
                <img src="icons/fermer.png" id="fermer_modifier_destination" alt="fermer" onclick="cacher_modifier_destination()">
                <input type="text" id="modifier_id" name="modifier_id" style="display:none">
                <h3>Modifier une destination</h3>
                <input type="text" id="modifier_destination" name="modifier_destination" maxlength="30" class="form_lign">
                <input type="date" id="modifier_date" name="modifier_date" class="form_lign">
                <input type="text" id="modifier_commentaire" name="modifier_commentaire" maxlength="1000" class="form_lign">
                <input type="text" id="modifier_photo" name="modifier_photo" maxlength="255" class="form_lign">
                <input type="submit" id="modifier_valider" class="form_lign form_valider">
            </div>
        </form>
    
    ';

    include ('footer.php');
        
    include ('js/js_destinations.php');
    include ('js/clic_sur_fenetre.php');
    
    echo'</body>
</html>';

?>