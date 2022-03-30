<pre id="message">

</pre>
<script>

    let tableau = [13, 2, 3, 12, 9, 11, 1, 10, 100, 6, 4, 14, 15, 8, 7, 5];
    let iteration = 0;
    let nbCaseAparcourir = tableau.length - 1;
    let permutation = 0;

    restitutionResultat(false);

    for (let j = 0; j < nbCaseAparcourir; j++){
        permutation++;
        document.getElementById("message").innerHTML += tableau + '\n';
        for (let i = 0; i < nbCaseAparcourir; i++){

            if(tableau[i] > tableau[i+ 1]){ //permutation

                let temp = tableau[i];
                tableau[i] = tableau[i+ 1];
                tableau[i+ 1] = temp;
            }
            iteration++;
        }
        iteration++;
        nbCaseAparcourir--;
    }

    restitutionResultat(true);

    function restitutionResultat(type){

        let message = `Tableau ${type ? '' : 'non '}trié :\n`;

        for (let i = 0; i < tableau.length; i++){
            message += `${tableau[i]}\n`;
        }
        document.getElementById("message").innerHTML += message;
        document.getElementById("message").innerHTML += `Nombre d'itération : ${iteration}, Permutation : ${permutation}\n`;
    }

</script>