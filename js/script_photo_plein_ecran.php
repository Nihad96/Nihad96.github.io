<script>

    div_photo_plein_ecran = document.getElementById('div_photo_plein_ecran');
    img_photo_plein_ecran = document.getElementById('img_photo_plein_ecran');
    function fonction_afficher_image_plein_ecran(id) {
        let source = document.getElementById('photo_destination_' + id).src;
        img_photo_plein_ecran.src = source;
        div_photo_plein_ecran.style.display = 'flex';
    }




</script>
