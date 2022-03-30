<!-- code HTML -->
<h1 id="titre">TP07 - Signe</h1>
<pre id="message"></pre>
<script>
    //Code Javascript
    let message = "";
    let nbADeviner = 1 + Math.floor(Math.random() * 100);//Tire un nombre aléatoire entre [1,100]
    let nbSaisi = 0;
    let nbEssais = 0;
    do
    {
        nbEssais++;
        nbSaisi = prompt(message + "Entrer un nombre");

        if (nbSaisi > nbADeviner) {
            message = "Trop grand - ";
        } else if (nbSaisi < nbADeviner)
        {
            message = "Trop petit - ";
        }

    } while (nbSaisi != nbADeviner);

    document.getElementById("message").innerHTML = "Bravo, vous avez trouvé le nombre " + nbADeviner + " en " + nbEssais + " essais";


    //Fin de code Javascript
</script>
