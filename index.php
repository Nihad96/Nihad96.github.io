<?php


$page = 'Accueil';


include ('navbar.php');

    ?><div id="content">
        <div class="card" onclick="location='profil.php'">
            <img src="images/profil.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">Qui suis-je ?</p>
                <p class="card_text">Présentation de mon profil et des projets que j'ai réalisé</p>
            </div>
        </div> 
        <div class="card" onclick="location='cedam.php'">
            <img src="images/cedam.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">Cedam</p>
                <p class="card_text">Présentation de Cedam, l'entreprise dans laquelle je suis alternant</p>
            </div>
        </div> 
        

        <div class="card" onclick="location='destinations.php'">
            <img src="images/travel.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">E5 - Destinations</p>
                <p class="card_text">Réalisation d'un CRUD (create, read, update, delete) en AJAX, sur le thème des voyages</p>
            </div>
        </div>
        
        <div class="card" onclick="location='missions.php'">
            <img src="images/laptop.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">E4 - Missions</p>
                <p class="card_text">Liste des missions E4 réalisées au cours de ma formation.</p>
            </div>
        </div>
        
        <!--<div class="card" onclick="location=\'veille.php\'">
            <img src="images/iot.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">Veille technologique</p>
                <p class="card_text">Veille technologique sur le metaverse</p>
            </div>
        </div>-->
            
        <!-- <div class="card" onclick="location=\'e5_sisr.php\'">
            <img src="images/network2.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">E5 Sisr</p>
                <p class="card_text">Projet école : réalisation d\'un réseau pour une TPE sur Cisco Packet Tracer</p>
            </div>
        </div> 
        
        <div class="card" onclick="location=\'e4_a17.php\'">
            <img src="images/network.jpg" alt="card1" class="card_img">
            <div class="card_content">
                <p class="card_title">E4</p>
                <p class="card_text">Cas A17</p>
            </div>
        </div> -->

        

    </div>
<?php

    include ('footer.php');
