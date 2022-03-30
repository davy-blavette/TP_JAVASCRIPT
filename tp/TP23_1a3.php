<!-- code HTML -->
<h1 id="titre">TP23 - 1 à 3</h1>
<pre id="message"></pre>
<script>
    //Code Javascript
    let value = 0;
    do{

        value = prompt("Veuillez saisir un nombre :");

    }while (value < 1 || value > 3);

    document.getElementById("message").innerHTML = "Bravo, vous avez saisi le nombre " + value;


    //Fin de code Javascript
</script>
