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

        if(note >= 0 && note <= 20){
            notes.push(note);
        }

        //Calculer la moyenne
        notes.forEach(function(note, index, array) {

            document.getElementById("message").innerHTML += "Note[" + index + "] : " + note + " - Mention " + Mention(note) +"\n";
            moyenne += note;

        });

        //longeur du tableau notes.length
        moyenne = moyenne / notes.length;

        //Afficher le résultat
        document.getElementById("message").innerHTML += "La moyenne est : " + Math.round(moyenne) + "\n";
    }

    function Mention(note){

        return note > 16 ? "Très Bien" : note >= 14 ? "Bien" : note >= 12 ? "Assez Bien" : note >= 10 ? "Passable" : "Echec";

    }

</script>
