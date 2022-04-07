<?php


$page = 'Liste des missions E4';

include('navbar.php'); ?>

    <div id="content">
        <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.open('fichiers/e4/tableau_synthese_nihad_zatric.xlsx')">Tableau de synthèse</button>
        <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.open('presentation.php')">Présentation</button>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_1.php'">
            <p class="card_title">E4 1 : Système de pagination</p>
            <img class="img_programmes" src="images/e4/e4_1/selecteur_semaine.PNG">
        </div>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_2.php'">
            <p class="card_title">E4 2 : Ajout manuel de ruptures</p>
            <img class="img_programmes" src="images/e4/e4_2/echange_2.PNG">
        </div>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_3.php'">
            <p class="card_title">E4 3 : Connexion utilisateur</p>
            <img class="img_programmes" src="images/e4/e4_3/sav_1.PNG">
        </div>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_4.php'">
            <p class="card_title">E4 4 : Requête asynchrone en vanilla JS</p>
            <img class="img_programmes" src="images/e4/e4_4/offre_1.PNG">
        </div>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_5.php'">
            <p class="card_title">E4 5 : Poste Tiroirs</p>
            <img class="img_programmes" src="images/e4/e4_5/poste_tiroirs_1.PNG">
        </div>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_6.php'">
            <p class="card_title">E4 6 : Portfolio</p>
            <img class="img_programmes" src="images/e4/e4_6/portfolio_1.PNG">
        </div>

        <div class="bloc_profil liste_e4" onclick="window.location = 'e4_7.php'">
            <p class="card_title">E4 7 : Icone dynamique de panier</p>
            <img class="img_programmes" src="images/e4/e4_7/panier_2.PNG">
        </div>

    </div>

<?php
include('footer.php');

?>