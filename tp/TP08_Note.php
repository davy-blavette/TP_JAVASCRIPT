<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP08 - Note</h1>

<label for="name">Saisir une note :</label>
<input type="number" id="note">
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
        let note = document.getElementById("note").value;
        let message = "Echec";

        if (note >= 10) {
            message = "Admis";
        } else if (note > 8) {
            message = "Rattrapage";
        }

        document.getElementById("message").innerHTML = message;
    }
    //Fin de code Javascript
</script>
