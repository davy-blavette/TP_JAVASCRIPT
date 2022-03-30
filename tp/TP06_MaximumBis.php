<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP06 - Maximum</h1>
<!--  -->
<label for="name">Entrer une valeur 1 :</label>
<input type="number" id="v1" name="v1" required>
<label for="name">Entrer une valeur 2 :</label>
<input type="number" id="v2" name="v2" required>
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
        //variable nombre, ici on est obligé de typer en number
        let v1 = document.getElementById("v1").value;
        let v2 = document.getElementById("v2").value;

        document.getElementById("message").innerHTML = "Max(" + v1 + ", " + v2 + ") = " + (v1 > v2 ? v1 : v2);
    }

    //Fin de code Javascript
</script>
