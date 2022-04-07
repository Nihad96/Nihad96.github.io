<?php


$page = 'Requête asynchrone en vanilla JS';

include('navbar.php');
?>
    <div id="content" class="content_e4">
        <div id="div_creer_destination">
            <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.open('fichiers/e4/e4_4/NZ_E4_4_requete_asynchrone.pdf')">Documentation PDF</button>
        </div>
        <div class="bloc_profil">
            <p>Le programme d'offres permet à un utilisateur de créer des offres promotionnelles via un WYSIWYG (What You See Is What You Get).<br><br>
                Parmi les différents champs modifiables par l'utilisateur, le champ des caractéristiques permet à l'utilisateur de sélectionner les caractéristiques qu'il souhaite ajouter à l'offre. Ces caractéristiques doivent pouvoir être gérées par l'utilisateur.<br><br>
                Ici on va détailler le fonctionnement de la création d'une caractéristique.</p>
        </div>

        <div class="bloc_profil">
            <video controls>


                <source src="images/e4/e4_4/offres.mp4"
                        type="video/mp4">

                Sorry, your browser doesn't support embedded videos.
            </video>
        </div>

        <div class="bloc_profil">
            <p>Lorsqu'un utilisateur clique sur le bouton d'ajout de caractéristiques, un modal s'ouvre. Lorsque l'utilisateur renseigne la valeur de la nouvelle caractéristique et qu'il valide le formulaire, la fonction fonction_valider_creation_caracteristique() est lancée.<br><br>
            Cette fonction permet l'ajout de la caractéristique dans la base de données de manière asynchrone (ne provoque pas de rechargement de page).</p>
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_4/offre_2.PNG">
        </div>
        <div class="bloc_profil">
            <p>Si l'ajout est effectué dans la base de données, on récupère l'id de la caractéristique via this.responseText, ce qui nous permettra de créer dynamiquement la caractéristique dans le DOM (Document Object Model), autrement dit le contenu de la page web visible par l'utilisateur.</p>
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_4/offre_3.PNG">
        </div>

    </div>
<?php
include('footer.php');
