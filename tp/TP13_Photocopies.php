<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP11 - Réponse</h1>
<!--  -->
<label for="name">Nombre de photocopies :</label>
<input type="text" id="reponse" name="reponse" required>
<button id="button">Valider</button>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<p id="message"></p>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript
    //Ajout d'un evenement de type click sur le boutton
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //variable nombre
        let nbPhotocopies = document.getElementById("reponse").value;
        let montantFacture = 0;

        //Affichage du message dans la zone paragraphe id message
        // calculer le montant de la facture
        if (nbPhotocopies <= 10) // calculer le montant pour 10 ou moins de photocopies
        {
            montantFacture = nbPhotocopies * 0.1; // nb_photocopies * 0.1
        }
        else if(nbPhotocopies <= 30 ) // calculer le montant pour 11 à 30 photocopies
        {
            montantFacture = 1 + (nbPhotocopies - 10) * 0.09; //10*0.1 + (nb_photocopies-10)*0.09
        }
        else
        {
            montantFacture = 2.8 + (nbPhotocopies - 30) * 0.08; // 10 * 0.1 + (nb_photocopies - 10) * 0.09
        }


        document.getElementById("message").innerHTML = "Facture : " + montantFacture + " €";
    }

    //Fin de code Javascript
</script>
