<?php


$page = 'Connexion utilisateur';

include('navbar.php');
?>
    <div id="content" class="content_e4">
        <div id="div_creer_destination">
            <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.location.href='fichiers/e4/NZ_E4_3_connexion_utilisateur.docx'">Fichier Word</button>
        </div>
        <div class="bloc_profil">
            <p>Dans le cadre de la création d'un programme de gestion de demandes de SAV, j'ai mis un place un système de connexion utilisateur.</p>

        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_3/sav_5.PNG">
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_3/sav_1.PNG">
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_3/sav_2.PNG">
        </div>
        <div class="bloc_profil">
            <p>Le fonctionnement est le suivant : on récupère le nom de compte et le mot de passe renseignés par l'utilisateur via la methode POST. Ensuite, on sélectionne via une requête SQL tous les utilisateurs enregistrés dans la base de données.<br><br>
                On va parcourir le tableau obtenu afin de déterminer si l'utilisateur existe. Le mot de passe étant hashé lorsqu'il est stocké dans la base de données, on vérifie la correspondance entre le mot de passe entré par l'utilisateur et le mot de passe stocké en utilisant la fonction password_verify.</p>
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_3/sav_3.PNG">
        </div>
        <div class="bloc_profil">
            <p>Si l'utilisateur est reconnu, alors on définit la valeur du booléen $acces à vrai. De plus, on remplit des variables relatives à l'utilisateur.<br><br>
            Ensuite, on définit des cookies relatifs à l'utilisateur grâce aux variables obtenues à la connexion. Ces cookies sont valides pendant 7 jours.</p>
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_3/sav_4.PNG">
        </div>

    </div>
<?php
include('footer.php');

?>