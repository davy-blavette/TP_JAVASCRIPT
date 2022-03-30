<!-- code HTML -->
<label>Ajouter un nombre :</label>
<input type="text" id="annee" value="">
<button id="bissextile">Bissextile</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("bissextile").addEventListener("click", function(){

        let annee = document.getElementById("annee").value;
        //On passe le message en majuscule - .toUpperCase()
        document.getElementById("resultat").innerHTML += "L'année " + annee + (Bissextile(annee) ? " est " : " n'est pas ") + "Bissextile\n";

    });


    function Bissextile(annee){

        let resultat = false;

        if ((annee % 4 === 0 && annee % 100 > 0) || (annee % 400 === 0)) {
            resultat = true;
        }

        return resultat;

    }




</script>
