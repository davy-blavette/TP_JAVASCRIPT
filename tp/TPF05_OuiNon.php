<!-- code HTML -->
<label>Ajouter question :</label>
<input type="text" id="question">
<button id="ajoutquestions">Valider</button>
<pre id="questions"></pre>
<label>Lancer questionnaire :</label>
<button id="lancerquestionnaire">Valider</button>
<pre id="sondage"></pre>

<script>

    //Tableau des questions
    let questions = ["Etes-vous marié ?", "Avez-vous des enfants ?"];
    let reponses = [];

    //AfficherQuestions()
    AfficherQuestions();

    document.getElementById("ajoutquestions").addEventListener("click",AjoutQuestion);
    document.getElementById("lancerquestionnaire").addEventListener("click",LancerQuestion);

    function AfficherQuestions(){
        document.getElementById("questions").innerHTML = "Liste des questions : \n";

        for (let i = 0; i< questions.length;i++){
            document.getElementById("questions").innerHTML += "Question " + (i+1) + " - "+ questions[i] + "\n";
            //on initialise/vide aussi le tableau réponses
            reponses[i] = "Null";

        }
    }

    function AjoutQuestion(){

        let question = document.getElementById("question").value;
        //ajout question
        questions.push(question);
        AfficherQuestions(questions);
    }

    function AfficherResultat(){
        document.getElementById("sondage").innerHTML = "Résultats du questionnaire : \n";
        for (let i = 0; i< questions.length;i++){
            document.getElementById("sondage").innerHTML += "Question " + (i+1) + " - Réponse : " + reponses[i] + "\n";
        }
    }

    function LancerQuestion() {
        for (let i = 0; i< questions.length;i++){
            //on complete le tableau reponses avec le retour de la fonction RepOuiNon
            reponses[i] = RepOuiNon(questions[i]);
        }
        //Afficher résultats
        AfficherResultat();

    }


    function RepOuiNon(msg)
    {
        let reponse;
        do
        {
            reponse = prompt(msg + "(Oui/Non) ?");

        } while (reponse != "Oui" && reponse != "Non");
        return reponse;
    }
    //Fin de code Javascript
</script>
