<?php


$page = 'Système de pagination';

include('navbar.php'); ?>

<div id="content">

    <div class="bloc_profil">
        <p>Dans le cadre de la création d'un programme de gestion de projets (diagramme de Gantt), j'ai mis un place un système de pagination sous forme de semaines.<br><br>
        Le fonctionnement est le suivant : on récupère la semaine et année actuelle via la méthode GET. Ensuite, on détermine le numéro de semaine et l'année de la semaine précédente, et le numéro de semaine et l'année de la semaine suivante.<br><br>
        Ensuite, on ajoute ces variables au formulaire en HTML qui permet à l'utilisateur de naviguer à travers les semaines.</p>
    </div>

    <div class="bloc_profil">
        <img class="img_programmes" src="images/e4/e4_1/selecteur_semaine.gif">
    </div>

    <div class="bloc_profil">
        <img class="img_programmes" src="images/e4/e4_1/selecteur_semaine_code_1.PNG">
    </div>

    <div class="bloc_profil">
        <img class="img_programmes" src="images/e4/e4_1/selecteur_semaine_code_2.PNG">
    </div>

</div>

<?php
include('footer.php');

?>