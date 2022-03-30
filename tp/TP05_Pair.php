<!-- code HTML -->
<h1 id="titre">TP05 - Pair - Réponse</h1>
<label for="name">Un nombre entier ? :</label>
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
        //Affichage du message dans la zone paragraphe id message
        if (reponse% 2 == 0)
        {
            message = "pair";
        }
        else
        {
            message = "impaire";
        }

        document.getElementById("message").innerHTML = "Nombre " + message;
    }

    //Fin de code Javascript
</script>
