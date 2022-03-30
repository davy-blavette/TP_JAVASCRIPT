<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP21 - FizzBuzz</h1>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<pre id="message"></pre>
<script>
    //Code Javascript
    let message;

    for (let i = 1; i <= 100; i++)
    {
        message = i + " ";

        if (i % 3 == 0)
        {
            message += "Fizz";
        }
        if (i % 5 == 0)
        {
            message += "Buzz";
        }


        document.getElementById("message").innerHTML += message + "\n";

    }
    //Fin de code Javascript
</script>
