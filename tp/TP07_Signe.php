<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP07 - Signe d'un nombre</h1>

<label for="name">Saisir un nombre :</label>
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
        let n = document.getElementById("reponse").value;

        if (n > 0)
        {
            document.getElementById("message").innerHTML = "Positif";
        }
        else if (n < 0)
        {
            document.getElementById("message").innerHTML = "Négatif";
        }
        else
        {
            document.getElementById("message").innerHTML = "Null";
        }
    }

    //Fin de code Javascript
</script>
