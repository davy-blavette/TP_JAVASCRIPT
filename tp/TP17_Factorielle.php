<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP17 - Factorielle </h1>
<!--  -->
<label for="name">Veuillez rentrer un nombre :</label>
<input type="text" id="reponse" name="reponse" required>
<button id="button">Valider</button>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<pre id="message"></pre>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript
    //Ajout d'un evenement de type click sur le boutton
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //variable nombre
        let n = Number(document.getElementById("reponse").value);
        let factorielle = 1;

        for (let i = 2; i <= n; i++)
        {
            factorielle = factorielle * i;
        }

            document.getElementById("message").innerHTML = n + "! = " + factorielle;

    }

    //Fin de code Javascript
</script>
