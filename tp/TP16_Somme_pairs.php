<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP16 - Somme de n entiers pairs</h1>
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
            if (i % 2 == 0) //i est pair
            {
                somme = somme + i;
            }
            i = i + 1; //ou i++
        }

        document.getElementById("message").innerHTML = "La somme des " + n + " entiers pairs est égale à " + somme;
    }

    //Fin de code Javascript
</script>
