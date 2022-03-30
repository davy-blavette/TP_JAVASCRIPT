<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP15 - Somme de n entiers</h1>
<!--  -->
<label for="name">Valeur de n :</label>
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
        let somme = 0;
        let i = 1;

        while (i <= n)
        {
            somme = somme + i;
            i = i + 1; //ou i++
        }

        document.getElementById("message").innerHTML = "La somme des " + n + " entiers est égale à " + somme;
    }

    //Fin de code Javascript
</script>
