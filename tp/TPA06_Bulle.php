<pre id="message"></pre>

<script>

    let tableau = [15, 1, 8, 50, 12, 33, 10, 46];
    let iteration = 0;

    for (let i = 0; i < tableau.length; i++)
    {
        document.getElementById("message").innerHTML += tableau[i] + ",";
    }

    //A chaque parcours, l'élément le plus grand remonte en fin du tableau
    //A chaque tour, on diminue le nombre de cases à parcourir
    for (let nbCasesAParcourir = tableau.length; nbCasesAParcourir > 0; nbCasesAParcourir--)
    {
        for (let i = 0; i < nbCasesAParcourir - 1; i++)
        {
            if (tableau[i] > tableau[i + 1]) //Permutation
            {
                let temp = tableau[i];
                tableau[i] = tableau[i + 1];
                tableau[i + 1] = temp;
            }
            iteration++;
        }
        iteration++;
    }
    document.getElementById("message").innerHTML += "\n";
    //Affichage du tableau trié
    for (let i = 0; i < tableau.length; i++)
    {
        document.getElementById("message").innerHTML += tableau[i] + ",";
    }

    document.getElementById("message").innerHTML += "\nNombre d'itération " + iteration;
</script>