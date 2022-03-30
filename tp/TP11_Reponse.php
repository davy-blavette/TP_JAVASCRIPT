<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP11 - Réponse</h1>
<!--  -->
<label for="name">Entrer une réponse (O/N) :</label>
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
        let reponse = document.getElementById("reponse").value;
        let message;
        //Affichage du message dans la zone paragraphe id message
        if (reponse =="o" || reponse == "O")
        {
            message = "Affirmatif";
        }
        else if (reponse == "n" || reponse == "N")
        {
            message = "Négatif";
        }
        else
        {
            message = "Ni Oui ni Non";
        }

        document.getElementById("message").innerHTML = message;
    }

    //Fin de code Javascript
</script>
