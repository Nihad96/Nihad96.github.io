<?php
$page = 'E5';

    include ('navbar.php');

    echo'<div id="contenu_veille">
            <h1>Contexte : Meat Me</h1>

            <div class="bloc_veille" style="display:flex; flex-direction:column ">
                <p class="txt_bloc_veille">
                Meat Me est une <b>startup</b> strasbourgeoise, qui a créé une application destinée aux rencontres entre personnes appréciant la viande.<br>
                Suite aux différents confinements et couvre-feux, ayant interdit les sorties, l’entreprise a connu un <b>essor conséquent</b>. 
                <br>
                <br>
                De ce fait, Meat Me a décidé d’investir de <b>nouveaux locaux</b>. L’entreprise s’est tournée vers nous pour réaliser son <b>réseau interne</b>.
                <br>
                <br>
                <span class="sous_titre_veille">Meat Me est composée de trois pôles :</span><br>
                - <b>La direction</b> (3 postes)<br>
                - <b>La production</b> (3 postes)<br>
                - <b>Le markéting </b>(3 postes)<br>
                
                <br>
                Les postes de la production et du markéting <b>doivent pouvoir communiquer</b>. Les postes de la direction ne doivent pas communiquer avec ceux des autres pôles, et vice versa.
                
                Une solution a été apportée à Meat Me sur <b>Cisco Packet Tracer</b> :
                

                </p>
                
                <img src="images/cisco.jpg" alt="cisco" style="width:90%; margin:auto;">

                <p class="txt_bloc_veille">
                La solution comprend un <b>routeur</b> qui nous permet d\'obtenir une connexion internet (box Orange), un <b>switch central</b> qui récupère cette connexion, un <b>serveur DCHP</b> connecté à ce switch, <b>3 switchs</b> représentant les 3 pôles de l\'entreprise, et <b>3 postes</b> pour chacun de ces switchs.
                </p>
            </div>

        </div>
            ';




    include ('footer.php');
        


?>