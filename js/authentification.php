<script>
    let form_authentification = document.getElementById('form_authentification');



    function afficher_authentification() {
        form_authentification.style.display = "flex";
    }

    function cacher_authentification() {
        form_authentification.style.display = "none";
        document.getElementById('text_erreur_connexion').classList.add('d-none');
    }

    function fonction_authentification() {
        let pseudo = document.getElementById('pseudo');
        let mot_de_passe = document.getElementById('mot_de_passe');

        if(pseudo != '' && mot_de_passe != '') {
            form_authentification.submit();
        }
        else {
            alert('Un des champs est vide');
        }
    }


</script>