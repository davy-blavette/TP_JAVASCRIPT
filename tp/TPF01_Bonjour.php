<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">Hello World</h1>
<!--  -->
<label for="name">Prénom (4 à 8 caractères):</label>
<input type="text" id="firstname" name="firstname" required minlength="4" maxlength="8" size="10">
<label for="name">Nom (4 à 8 caractères):</label>
<input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10">
<button id="button">Valider</button>
<pre id="message"></pre>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript
    //Ajout d'un evenement de type click sur le boutton
    document.getElementById("button").addEventListener("click",Message);

    //Fonction
    function Message() {
        let nom = document.getElementById("name").value;
        let prenom = document.getElementById("firstname").value;
        //appel fonction
        DireBonjour(nom, prenom);
        //appel fonction
        DireBonjour("DWWM", "Algorithme");
    }

    //Fonction DireBonjour
    function DireBonjour(nom, prenom) {
        document.getElementById("message").innerHTML += "Bonjour " + nom + " " + prenom + "\n";

    }
    
    //Fin de code Javascript
</script>


















