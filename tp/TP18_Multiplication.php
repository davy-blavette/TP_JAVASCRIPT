<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP18 - Table de multiplication</h1>
<!--  -->
<label for="name">Table de n :</label>
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
        let n = document.getElementById("reponse").value;


        for(let i = 1;i <= 10;i++){
            //remarque, ici on utilise += pour auto concaténer le texte, et \n pour retour a la ligne dans la balise pre
            document.getElementById("message").innerHTML += n + " x " + i + " = " + 7*i + "\n";
        }

    }

    //Fin de code Javascript
</script>
