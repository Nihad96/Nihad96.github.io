<?php


$page = 'Panier dynamique';

include('navbar.php');
?>
    <div id="content" class="content_e4">
        <div id="div_creer_destination">
            <button id="bouton_e5_auth" class="bouton" type="button" onclick="window.open('fichiers/e4/NZ_E4_5_panier_dynamique.pdf')">Documentation PDF</button>
        </div>
        <div class="bloc_profil">
            <p>Dans le cadre de la réalisation du projet fictif de réalisation du site e-commerce Dendo Jitensha, j'ai réalisé la tache suivante.<br><br>
               Lorsque l'utilisateur est connecté, on affiche le panier. Si le panier est vide, il faut uniquement afficher l'icone du panier. Si il y a des articles dans le panier, il faut également afficher un petit cercle comprenant le nombre d'articles dans le panier.
              </p>
        </div>


        <div class="bloc_profil bloc_e4">
            <p>Si l'utilisateur est connecté alors on affiche l'image du panier. <br>
                Ensuite on inclut le fichier  connexion_panier_navbar.php : ce fichier va chercher dans la base de données si il y a des articles dans le panier du client. Si c'est le cas, on renvoie la somme des articles du panier.<br><br>
            </p>

           <br> <p>Ensuite, on affiche en position absolue, en haut à droite de l'icone du panier, un cercle rouge comprenant la quantité d'articles contenue dans la base de données.</p>
            <img class="img_programmes" src="images/e4/e4_5/panier_3.PNG">
        </div>

        <div class="bloc_profil bloc_e4">
            <p>Fichier connexion_panier_navbar.php :</p>
            <img class="img_programmes" src="images/e4/e4_5/panier_4.PNG">

        </div>

        <div class="bloc_profil bloc_e4">
            <p>Panier vide</p>
            <img class="img_programmes" src="images/e4/e4_5/panier_1.PNG">
        </div>

        <div class="bloc_profil bloc_e4">
            <p>Panier rempli</p>
            <img class="img_programmes" src="images/e4/e4_5/panier_2.PNG">
        </div>

    </div>
<?php
include('footer.php');

?>