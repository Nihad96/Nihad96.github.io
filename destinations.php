<?php
$page = 'Destinations';
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <title>Destinations</title>
        <link href="css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php
    include ('navbar.php');

    
?>
    <div id="content">
        <?php if(isset($_SESSION['name'])) { ?>
            <div id="div_creer_destination">
                <button id="bouton_creer_destination" class="bouton" type="button" onclick="afficher_creer_destination()">Ajouter une destination</button>
            </div>
        <?php } ?>

        </div>
    
        <form class="form" id="form_creer_destination" onsubmit="return fonction_creer_destination();">
            <div class="form_content">
                <img src="icons/fermer.png" class="bouton_fermeture" id="fermer_creer_destination" alt="fermer" onclick="cacher_creer_destination()">
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
                <img src="icons/fermer.png" class="bouton_fermeture" id="fermer_modifier_destination" alt="fermer" onclick="cacher_modifier_destination()">
                <input type="text" id="modifier_id" name="modifier_id" style="display:none">
                <h3>Modifier une destination</h3>
                <input type="text" id="modifier_destination" name="modifier_destination" maxlength="30" class="form_lign">
                <input type="date" id="modifier_date" name="modifier_date" class="form_lign">
                <input type="text" id="modifier_commentaire" name="modifier_commentaire" maxlength="1000" class="form_lign">
                <input type="text" id="modifier_photo" name="modifier_photo" maxlength="255" class="form_lign">
                <input type="submit" id="modifier_valider" class="form_lign form_valider">
            </div>
        </form>


    <?php

    include ('footer.php'); ?>

    <div id="div_photo_plein_ecran">
        <img src="" alt="photo_plein_ecran" id="img_photo_plein_ecran">
    </div>

    <?php
    include ('js/js_destinations.php');

    if(isset($_SESSION['name'])) {
        // génère l'affichage des éléments via la requête Mysql
        ?><script>window.onload = afficher_elements("admin");</script><?php
    }
    else {
        ?><script>window.onload = afficher_elements("user");</script><?php
    }

    include ('js/script_photo_plein_ecran.php');
    include ('js/clic_sur_fenetre.php');
    
    echo'</body>
</html>';

?>