<script>
    let form_authentification = document.getElementById('form_authentification');

    window.onclick = function(event) {
        if (event.target == form_authentification) {
            form_authentification.style.display = "none";
        }
    }


    function afficher_authentification() {
        form_authentification.style.display = "block";
    }

    function cacher_authentification() {
        form_authentification.style.display = "none";
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