

<div id="footer">
<div id="footer_text">
    <div class="social" onclick="window.open('mailto:zatricnihad@gmail.com');">
        <img src="icons/gmail.png" alt="gmail" class="social_img">
        <p>Email</p>
    </div> 
    <div class="social not_pointer">
        <img src="icons/telephone.png" alt="telephone" class="social_img">
        <p>07.83.XX.XX.XX</p>
    </div>
    
    
</div>
<div id="footer_social">
    <div class="social not_pointer">
        <img src="icons/city.png" alt="city" class="social_img">
        <p>Strasbourg</p>
    </div>
    <div class="social" onclick="window.open('https://www.linkedin.com/in/nihadzatric/');">
        <img src="icons/linkedin.png" alt="linkedin" class="social_img">
        <p>@Nihad96</p>
    </div>
</div>
</div>


</body>
</html>

<?php

if(!isset($_SESSION['nom'])) {
    ?>
    <form class="form" method="POST" id="form_authentification" onsubmit="return fonction_authentification();">
        <div class="form_content">
            <img src="icons/fermer.png" class="bouton_fermeture" id="fermer_modifier_authentification" alt="fermer" onclick="cacher_authentification()">
            <h3>Connectez vous</h3>
            <p class="d-none" id="text_erreur_connexion">Le nom de compte et/ou le mot de passe ne sont pas reconnus.</p>

            <input type="text" id="pseudo" name="pseudo" maxlength="255" class="form_lign" placeholder="Nom de compte">
            <input type="password" id="mot_de_passe" name="mot_de_passe" class="form_lign" placeholder="Mot de passe">
            <input type="submit" class="form_lign form_valider">
        </div>
    </form>

<?php
include('js/authentification.php');
}