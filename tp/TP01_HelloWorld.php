<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">Hello World</h1>
<style>
    h1{
        color:red;
        border:1px solid black;
    }

</style>

<?php
//un simple code PHP pour écrire une ligne
echo "<h3 id='php'>Voici du code PHP</h3>";
?>
<!--  -->
<label for="name">Prénom (4 à 8 caractères):</label>
<input type="text" id="firstname" name="firstname" required minlength="4" maxlength="8" size="10">
<label for="name">Nom (4 à 8 caractères):</label>
<input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10">
<button id="button">Valider</button>
<p id="message"></p>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript
    //Ajout d'un evenement de type click sur le boutton
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //Affichage du message dans la zone paragraphe id message
        document.getElementById("message").innerHTML = "Bonjour " + document.getElementById("firstname").value + " " + document.getElementById("name").value;
        console.log('function message appellé');
    }

    //Fin de code Javascript
</script>


















