<script>

// tuto youtube : https://www.youtube.com/watch?v=oie6T8IVeMA&t=135s

// afficher div création

form_creer_destination = document.getElementById("form_creer_destination");
form_modifier_destination = document.getElementById("form_modifier_destination");

function afficher_creer_destination() {
    form_creer_destination.style.display = "flex";
    document.getElementById("creer_destination").value = "";
    document.getElementById("creer_date").value = "";
    document.getElementById("creer_commentaire").value = "";
    document.getElementById("creer_photo").value = "";
}

function cacher_creer_destination() {
    form_creer_destination.style.display = "none";
}

// bloc AJAX qui permet de lire la BDD
/* var cass = "all"; */

function afficher_elements(cass) {
    var ajax = new XMLHttpRequest();
    if(cass == "all") {
        ajax.open("GET", "connexions/sql_lire_destinations.php", true);
        ajax.send();
    }
    else {

        suppr = document.getElementsByClassName("une_destination");
        for(k=0; k<suppr.length; k++) {
            document.getElementById("content").removeChild(suppr[k]);
        }

        recherche = document.getElementById("input_recherche").value;
        ajax.open("POST", "connexions/sql_chercher_destinations.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("recherche=" + recherche);

    }
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            // plutôt que de créer une variable data, je crée une variable window.data > variable globale // elle contient toutes les destinations
            window.data = JSON.parse(this.responseText);

            var html = "";

            // pour chaque ligne on crée une div
            for (var a = 0; a < window.data.length; a++) {
                html += '<div class="une_destination" id="destination_' + window.data[a].id + '">';
                    html += '<div class="legende_destination">';
                        html += '<p class="titre" id="titre_destination_' + window.data[a].id + '">' + window.data[a].destination.charAt(0).toUpperCase() + window.data[a].destination.slice(1) + '</p>';
                        html += '<div class="date_boutons">';
                            html += '<p class="date_destination" id="date_destination_' + window.data[a].id + '">' + window.data[a].date + '</p>';
                            html += '<div class="boutons_destination">';
                                html += '<img class="bouton_modifier" src="icons/modifier.png" onclick="afficher_modifier_destination('+window.data[a].id+')">';
                                html += '<img class="bouton_supprimer" src="icons/supprimer.png" onclick="fonction_supprimer_destination('+window.data[a].id+')">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                    html += '<img src="'+window.data[a].photo+'" class="photo_destination" id="photo_destination_' + window.data[a].id + '"></img>';
                    html += '<p class="description_destination" id="description_destination_' + window.data[a].id + '">' + window.data[a].commentaire.charAt(0).toUpperCase() + window.data[a].commentaire.slice(1)  + '</p>';
                html += "</div>";
            }
            document.getElementById("content").innerHTML += html;
        }
        /* console.log(window.data); */
    }
}

// génère l'affichage des éléments via la requête Mysql
afficher_elements("all");


function fonction_creer_destination() {
    var creer_destination = document.getElementById("creer_destination").value;
    var creer_date = document.getElementById("creer_date").value;
    var creer_commentaire = document.getElementById("creer_commentaire").value;
    var creer_photo = document.getElementById("creer_photo").value;

    var ajax = new XMLHttpRequest();
    ajax.open("POST", "connexions/sql_creer_destinations.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("creer_destination=" + creer_destination + "&creer_date=" + creer_date + "&creer_commentaire=" + creer_commentaire + "&creer_photo=" + creer_photo);

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            /* var data = JSON.parse(this.responseText); */

            if(isNaN(this.responseText)) {
                console.log(this.responseText);
            }
            else {

                var html = '<div class="une_destination" id="destination_' + this.responseText + '">';
                    html += '<div class="legende_destination">';
                        html += '<p class="titre" id="titre_destination_' + this.responseText + '">' + creer_destination + '</p>';
                        html += '<div class="date_boutons">';
                            html += '<p class="date_destination" id="date_destination_' + this.responseText + '">' + creer_date + '</p>';
                            html += '<div class="boutons_destination">';
                                html += '<img class="bouton_modifier" src="icons/modifier.png" onclick="afficher_modifier_destination('+this.responseText+')">';
                                html += '<img class="bouton_supprimer" src="icons/supprimer.png" onclick="fonction_supprimer_destination('+this.responseText+')">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                    html += '<img src="' + creer_photo + '" class="photo_destination" id="photo_destination_' + this.responseText + '"></img>';
                    html += '<p class="description_destination" id="description_destination_' + this.responseText + '">' + creer_commentaire + '</p>';
                html += "</div>";
                document.getElementById("content").innerHTML += html;


                // puis recréer le DOM à partir de mysql
                form_creer_destination.style.display = "none";

                // on va créer une nouvelle ligne
                row = window.data.length;
                // on crée un objet json avec les infos à rentrer dans la nouvelle ligne du tableau
                json = '{"id":' + this.responseText + ', "destination":"' + creer_destination + '", "date":"' + creer_date + '", "commentaire":"' + creer_commentaire + '", "photo":"' + creer_photo + '"}';

                // on dit que la nouvelle ligne du tableau prend en valeurs l'objet JSON
                window.data[row] = JSON.parse(json);
            }
        }
    };

    return false;
}

function fonction_supprimer_destination(supprimer_id) {
    if(confirm("Voulez vous vraiment supprimer cette destination ?")) {
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "connexions/sql_supprimer_destinations.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("supprimer_id=" + supprimer_id);

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                /* console.log(this.responseText); */

                // on supprime le bloc du DOM
                document.getElementById("content").removeChild(document.getElementById("destination_" + supprimer_id));
                /* var data = JSON.parse(this.responseText); */
            }
        };
    }
}

// aficher le modal de modif

function afficher_modifier_destination(modifier_id) {
    
    /* console.log(window.data); */
    for (var a = 0; a < window.data.length; a++) {
        if(window.data[a].id == modifier_id) {
            document.getElementById("modifier_id").value = window.data[a].id;
            document.getElementById("modifier_destination").value = window.data[a].destination;
            document.getElementById("modifier_date").value = window.data[a].date;
            document.getElementById("modifier_commentaire").value = window.data[a].commentaire;
            document.getElementById("modifier_photo").value = window.data[a].photo;
        }
    }

    // afficher le modal
    form_modifier_destination.style.display = "flex";
}

function cacher_modifier_destination() {
    form_modifier_destination.style.display = "none";
}

function fonction_modifier_destination() {
    var modifier_id = document.getElementById("modifier_id").value;
    var modifier_destination = document.getElementById("modifier_destination").value;
    var modifier_date = document.getElementById("modifier_date").value;
    var modifier_commentaire = document.getElementById("modifier_commentaire").value;
    var modifier_photo = document.getElementById("modifier_photo").value;

    var ajax = new XMLHttpRequest();
    ajax.open("POST", "connexions/sql_modifier_destinations.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("modifier_destination=" + modifier_destination + "&modifier_date=" + modifier_date + "&modifier_commentaire=" + modifier_commentaire + "&modifier_photo=" + modifier_photo + "&modifier_id=" + modifier_id);

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            /* console.log(this.responseText); */
            /* var data = JSON.parse(this.responseText); */

            document.getElementById("titre_destination_"+modifier_id).innerHTML = modifier_destination;
            document.getElementById("date_destination_"+modifier_id).innerHTML = modifier_date;
            document.getElementById("photo_destination_"+modifier_id).innerHTML = modifier_photo;
            document.getElementById("description_destination_"+modifier_id).innerHTML = modifier_commentaire;
            form_modifier_destination.style.display = "none";
            for (var a = 0; a < window.data.length; a++) {
                if(window.data[a].id == modifier_id) {
                    window.data[a].destination = modifier_destination;
                    window.data[a].date = modifier_date;
                    window.data[a].commentaire = modifier_commentaire;
                    window.data[a].photo = modifier_photo;
                }
            }
        }
    };

    return false;
}


function chercher_elements (){
    afficher_elements("search");
}

</script>