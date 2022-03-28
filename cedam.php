<?php
$page = 'Cedam';
include ('navbar.php');

?>

<div id="content">

    <div class="bloc_profil">
        <div class="contenu_profil">
            <p><strong>Depuis 30 ans</strong>, Cedam redessine l’espace de la salle de bains avec,chaque année,
                de nouvelles collections exclusives de meubles aux lignes tendances alliant design, fonctionnalité et esthétique.</p>
            <p><strong>Notre site de production français </strong>situé à Obernai en Alsace, permet une maitrise totale de la qualité et une grande réactivité.
                Présent auprès des meilleurs spécialistes du domaine, Cedam délivre une expertise reconnue par les professionnels et les particuliers, qui s’appuie sur des technologies avancées et des équipements des plus modernes.</p>
            <p><strong>Notre mission </strong>consiste à concevoir, fabriquer et commercialiser des meubles de salle de bains qui répondent aux 4 critères d’exigence que nous nous sommes fixés : <strong>Esthétique</strong>, <strong>Qualité</strong>, <strong>Fonctionnalité</strong>, <strong>Durabilité</strong>
            </p>
        </div>
        <img  id="img_cedam" src="images/profil/cedam.png">
    </div>

    <div class="bloc_profil">
        <div class="contenu_profil" id="contenu_video">
            <p class="titre">Vidéo de présentation</p>
            <iframe id="iframe_video" width="1280" height="720" src="https://www.youtube.com/embed/AnaZH8A1Tb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

</div>

<?php

include ('footer.php');