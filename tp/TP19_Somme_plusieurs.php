<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<p id="message"></p>
<script>
    //Code Javascript
    let reponse;
    let message;
    do
    {
        let n = prompt("Entrer un nombre");

        let somme = 0;
        let i = 1;

        while (i <= n)
        {
            somme = somme + i;
            i = i + 1; //ou i++
        }
        message = "La somme des " + n + " entiers est égale à " + somme + "\n";
        document.getElementById("message").innerHTML = message;
        reponse = prompt(message + "Autre calcul (O) ?");

    }while (reponse == "O" || reponse == "o");
    //Fin de code Javascript
</script>
