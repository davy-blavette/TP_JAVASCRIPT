<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP04 - Permutation</h1>
<!--  -->
<label for="name">Valeur de C1 :</label>
<input type="text" id="c1" name="c1" value="Chien" disabled >
<label for="name">Valeur de C2 :</label>
<input type="text" id="c2" name="c2" value="Chat" disabled >
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
        //variable c1
        let c1 = document.getElementById("c1").value;
        let c2 = document.getElementById("c2").value;
        let c3 = c1;
        c1 = c2;
        c2 = c3;
        //Affichage du message dans la zone paragraphe id message
        //perimetre.toFixed(4) - Pour arrondir un nombre à 4 décimal
        document.getElementById("message").innerHTML = "Permutation C1 = " + c1 + " C2 = " + c2;
    }

    //Fin de code Javascript
</script>
