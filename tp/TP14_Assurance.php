<h1 id="titre">TP14 - Assurance</h1>


<label for="age">Votre age :</label>
<input type="number" id="age" min="10" max="100"><br>
<label for="annee">Nombre d'années de permis :</label>
<input type="text" id="annee" size="4"><br>
<label for="accidents">Nombre d'accidents :</label>
<input type="text" id="accidents" size="4"><br>
<label for="anciennete">Nombre d'années d'ancienneté :</label>
<input type="text" id="anciennete" size="4"><br>

<button id="button">Valider</button>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<p id="message"></p>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    document.getElementById("button").addEventListener("click",message);


    function message() {
        //variables, type Number pour manipuler nombre (en l'etat type string)
        let age = Number(document.getElementById("age").value);
        let annee = Number(document.getElementById("annee").value);
        let accidents = Number(document.getElementById("accidents").value);
        let anciennete = Number(document.getElementById("anciennete").value);
        let points = 1;
        let contrat = "";

        if (age < 25){
            points++;
        }
        if(annee < 2){
            points++;
        }

        points += accidents;

        if(anciennete > 5 && points < 4){
            points--;
        }

        switch (points) {
            case 0: // equivalent points == 0
                contrat = "Bleu";
                break;//le break permet d'arreter la suite des instructions
            case 1:
                contrat = "Vert";
                break;
            case 2:
                contrat = "Orange";
                break;
            case 3:
                contrat = "Rouge";
                break;
            default:
                contrat = "Refusé";
        }

        document.getElementById("message").innerHTML = "Contrat : " + contrat;
    }

</script>
