<?php


$page = 'Portfolio';

include('navbar.php');
?>
    <div id="content" class="content_e4">
        <div id="div_creer_destination">
            <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.location.href='fichiers/e4/e4_6/NZ_E4_6_portfolio.pdf'">Documentation PDF</button>
        </div>
        <div class="bloc_profil">
            <p>Afin de présenter les réalisations effectuées pendant mais deux années de BTS mais aussi dans le but de présenter mon projet professionnel, j'ai réalisé ce portfolio.<br><br>
                De nombreuses pratiques ont été abordées dans le cadre de la réalisation de ce portfolio :<br>
                    - Langages : PHP, MySQL, Javascript, HTML, CSS<br>
                    - Technologies : AJAX<br>
                    - Responsive design<br><br>
                Ce portfolio comprend de nombreuses pages :
            </p>
        </div>


        <div class="bloc_profil bloc_e4 bloc_portfolio" onclick="location='profil.php'">
            <p>La page "Qui suis-je ?" retraçant mon parcours et permettant de télécharger mon CV au format PDF : </p>
            <img class="img_programmes" src="images/profil.jpg">
        </div>

        <div class="bloc_profil bloc_e4 bloc_portfolio" onclick="location='cedam.php'">
            <p>La page "Cedam" présentant l'entreprise dans laquelle je suis alternant : </p>
            <img class="img_programmes" src="images/cedam.jpg">
        </div>

        <div class="bloc_profil bloc_e4 bloc_portfolio" onclick="location='destinations.php'">
            <p>La page "Destinations" qui contient mes deux projets E5 : </p>
            <img class="img_programmes" src="images/travel.jpg">
        </div>

        <div class="bloc_profil bloc_e4 bloc_portfolio" onclick="location='missions.php'">
            <p>La page "Missions" qui contient la liste de mes missions E4 : </p>
            <img class="img_programmes" src="images/laptop.jpg">
        </div>

    </div>
<?php
include('footer.php');
