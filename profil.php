<?php

$page = 'Qui suis-je ?';

include ('navbar.php');
?>

<div id="content">
    <a class="bouton" href="fichiers/cv_nihad.pdf" download="cv_nihad_zatric">Télcharger mon CV</a>

    <div class="bloc_profil">
        <div class="contenu_profil">
            <p class="titre"><u>Formation</u> : BTS Services Informatiques aux Organisations (SIO)</p>
            <p><strong>Iris Strasbourg</strong>, depuis Octobre 2020.</p>
            <p><strong>Langages abordés : </strong>Php, SQL, Javascript, CSS</p>
            <p><strong>Projets :</strong>Projet client fictif en Php procédural</p>
            <p><strong>Autre : </strong>AJAX (Javascript), MVC, Git, Environnements Linux et Windows</p>
        </div>
        <img class="img_profil" src="images/profil/iris.jpg" style="cursor: pointer" onclick="window.open('https://ecoleiris.fr/', '_blank')">
    </div>

    <div class="bloc_profil">
        <div class="contenu_profil">
            <p class="titre"><u>Alternance</u> : Développeur web</p>
            <p><strong>Cedam</strong>, depuis Juillet 2020.</p>
            <p><strong>Langages abordés : </strong>Php, SQL, Javascript, CSS, Powershell, Python, VBA</p>
            <p><strong>Projets : </strong>
                <a target="_blank" href="echange.php">Programme d'échange interne</a> /
                <a target="_blank"  href="sav.php">Programme de gestion du SAV</a> /
                <a target="_blank" href="offres.php">Offres</a> /
            </p>
            <p><strong>Autre : </strong>Environnement Windows, Raspberry Pi et Arduino</p>
        </div>
        <img class="img_profil" src="images/profil/cedam.png" style="cursor: pointer" onclick="window.open('cedam.php', '_blank')">
    </div>

    <div class="bloc_profil">
        <div class="contenu_profil">
            <p class="titre"><u>Formation</u> : Développeur web / web mobile</p>
            <p><strong>Wild Code School Strasbourg</strong>, de septembre 2018 à février 2019</p>
            <p><strong>Langages abordés : </strong>Php, SQL, Javascript, CSS</p>
            <p><strong>Projets : </strong>Projet client fictif en Php procédural, Projet client fictif en Symfony 4</p>
            <p><strong>Autre : </strong>Symfony 4, MVC, Twyg, Git, Méthodes agiles, Environnement Linux</p>
        </div>
        <img class="img_profil" src="images/profil/wild.png" style="cursor: pointer" onclick="window.open('https://www.wildcodeschool.com/fr-FR', '_blank')">
    </div>

    <div class="bloc_profil">
        <div class="contenu_profil">
            <p class="titre"><u>Stage</u> : Développeur web</p>
            <p><strong>Netty</strong>, de février 2019 à juin 2019</p>
            <p><strong>Langages abordés : </strong>Php, MySQL, Javascript, CSS</p>
            <p><strong>Missions : </strong>Relation client et SAV, développement de fonctionnalités ponctuelles, corrections de bugs récurrents.</p>
            <p><strong>Autre : </strong>Jquery, redirections htaccess, </p>
        </div>
        <img class="img_profil" id="netty" src="images/profil/netty.png" style="cursor: pointer" onclick="window.open('https://www.netty.fr/', '_blank')">
    </div>

    <div class="bloc_profil">
        <div class="contenu_profil">
            <p class="titre"><u>Centres d'intérêt</u></p>
            <p><strong>Football</strong> en club, depuis mes 6 ans</p>
            <p><strong>Sorties </strong>entre amis</p>
            <p><strong>Voyages </strong>aux quatres coins du monde</p>
            <p><strong>Randonnée </strong> et sports en plein air</p>
        </div>
        <img class="img_profil" src="images/profil/foot.jpg">
    </div>

</div>

<?php include ('footer.php'); ?>