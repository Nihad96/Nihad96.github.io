<?php


$page = 'Ajout de ruptures';

include('navbar.php');
?>
    <div id="content" class="content_e4">
        <div id="div_creer_destination">
            <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.open('fichiers/e4/e4_2/NZ_E4_2_ajout_ruptures.pdf')">Documentation PDF</button>
        </div>
        <div class="bloc_profil">
            <p>Contexte : Un programme d'échange en interne a été réalisé. Il permet de référencier toutes les commandes actives, afin d'en assurer le suivi.<br><br>
            Pour traiter au mieux l'avancée des commandes, j'ai crée un module d'ajout de rupture d'article. <br><br>Grâce à ce module, on peut ajouter un article en rupture en renseignant sa référence. Si la référence est présente dans une ou plusieurs commandes, le programme le signalera à l'utilisateur.</p>
        </div>

        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_2/echange_1.PNG">
        </div>
        <div class="bloc_profil bloc_e4">
            <p>Formulaire en HTML : </p>
            <img class="img_programmes" src="images/e4/e4_2/echange_4.PNG">
        </div>
        <div class="bloc_profil bloc_e4">
            <p>Formualire côté client :</p>
            <img class="img_programmes" src="images/e4/e4_2/echange_2.PNG">
        </div>

        <div class="bloc_profil bloc_e4">
            <p>Fichier d'insertion à la base de données :<br><br>Le fonctionnement du script est simple : on récupère les informations saisies dans les champs par l'utilisateur grâce à la méthode POST et on les insère dans la base de données MySQL.
            </p>
            <img class="img_programmes" src="images/e4/e4_2/echange_3.PNG">
        </div>

    </div>
<?php
include('footer.php');
