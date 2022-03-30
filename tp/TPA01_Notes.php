<label for="name">Saisir une note :</label>
<input type="text" id="note">
<button id="button">Valider</button>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<pre id="message"></pre>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>

    //Porté en dehors de la fonction message
    let notes = [12, 14, 08, 13, 12];
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //variables
        let note = Number(document.getElementById("note").value);
        let moyenne = 0;


        notes.push(note);
        notes["toto"] = 20;

        //Calculer la moyenne
        notes.forEach(function(item, index, array) {

            document.getElementById("message").innerHTML += "Note[" + index + "] : " + item + "\n";
            moyenne += item;
            console.log(array);

        });

        //longeur du tableau notes.length
        moyenne = moyenne / notes.length;

        //Afficher le résultat
        document.getElementById("message").innerHTML += "La moyenne est : " + Math.round(moyenne) + "\n";

        //Solution avec une boucle For

        for (let i = 0; i < notes.length;i++){

            document.getElementById("message").innerHTML += "Note[" + i + "] : " + notes[i] + "\n";

        }

    }

</script>
