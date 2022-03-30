<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">Calcul d'un cube</h1>
<!--  -->
<label for="nombre">Saisir un nombre:</label>
<input type="text" id="nombre" name="nombre" value="2">
<label for="puissance">Saisir une puissance:</label>
<select id="puissance">
    <option value="2">2</option>
    <option value="5">5</option>
    <option value="10">10</option>
</select>
<button id="button">Valider</button>
<p id="message"></p>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript
    //Ajout d'un evenement de type click sur le boutton
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //variable nombre
        let nombre = document.getElementById("nombre").value;
        let puissance = document.getElementById("puissance").value;
        //variable cube
        //let cube = nombre * nombre * nombre;
        //let cube = Math.pow();
        let cube =  Math.pow(nombre, puissance);
        //Affichage du message dans la zone paragraphe id message
        document.getElementById("message").innerHTML = "Le cube du nombre " + nombre + ", a la puissance " + puissance + " = " + cube;
    }

    //Fin de code Javascript
</script>