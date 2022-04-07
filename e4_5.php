<?php


$page = 'Poste Tiroirs';

include('navbar.php');
?>
    <div id="content" class="content_e4">
        <div id="div_creer_destination">
            <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.open('fichiers/e4/e4_5/NZ_E4_5_poste_tiroirs.pdf')">Documentation PDF</button>
        </div>
        <div class="bloc_profil">
            <p>Lorsqu'une commande est passée, un ordre de fabrication est généré par notre ERP, Divalto. Cet ordre de fabrication (OF) a un numéro unique.<br>
            Automatiquement, un bon de fabrication est imprimé au poste des tiroirs si il y a des tiroirs à monter dans cette commande. Sur ce bon de fabrication, un code barre représente le numéro d'OF.<br>
            Lorsque l'employé au poste des tiroirs scanne ce code avec un lecteur de codes barre, il obtient une liste de tous les tiroirs à monter.
            </p>
        </div>

        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_5/poste_tiroirs_1.PNG">
        </div>
        <div class="bloc_profil">
            <p>Une seconde fonctionnalité du programme nous permet d'afficher les composants d'un tiroir. En cliquant sur le bouton loupe d'une ligne de tiroir, une fonction javascript est lancée.<br>
            Cette fonction javascript permet d'effectuer une requête asynchrone vers un fichier d'un deuxième programme appelé besoins_postes.</p>
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_5/poste_tiroirs_3.PNG">
        </div>
        <div class="bloc_profil">
            <p>Un modal est rempli avec les informations renvoyées par le fichier, il liste tous les composants du tiroir en fonction de leur catégorie.</p>
        </div>
        <div class="bloc_profil">
            <img class="img_programmes" src="images/e4/e4_5/poste_tiroirs_2.PNG">
        </div>

    </div>
<?php
include('footer.php');
