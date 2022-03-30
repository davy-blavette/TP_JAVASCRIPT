<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP03 - Perimetre d'un cercle</h1>
<!--  -->
<label for="name">Saisir un rayon:</label>
<input type="text" id="rayon" name="rayon" required>
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
        let rayon = document.getElementById("rayon").value;
        //variable cube
        let perimetre = 2 * rayon * Math.PI;
        //Affichage du message dans la zone paragraphe id message
        //perimetre.toFixed(4) - Pour arrondir un nombre à 4 décimal
        document.getElementById("message").innerHTML = "Le périmètre d'un cercle de rayon " + rayon + " est " + perimetre.toFixed(4);
    }

    //Fin de code Javascript
</script>
