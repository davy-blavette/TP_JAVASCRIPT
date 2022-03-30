<!-- code HTML -->
<h1 id="titre">TP12 - Zorglub</h1>
<!--  -->
<label for="genre">Quel est votre genre ? :</label>
<select id="genre">
    <option value="femme">Femme</option>
    <option value="homme">Homme</option>
</select>
<label for="age">Quel est votre age ? :</label>
<input type="number" id="age">
<button id="button">Valider</button>
<p id="message"></p>

<script>
    //Code Javascript
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //variable nombre
        let genre = document.getElementById("genre").value;
        let age = document.getElementById("age").value;
        let message = "non imposable";
        //Affichage du message dans la zone paragraphe id message
        if ((genre == "homme" && age > 20) || (genre == "femme" && (age >= 18 && age <= 35)))
        {
            message = "imposable";
        }
        /* Autre solution en deux étapes
        else if (genre == "femme" && (age >= 18 && age <= 35))
        {
            message = "imposable";
        }
        */
        document.getElementById("message").innerHTML = `L'individu ${genre} de ${age} ans est ${message}`;

    }

    //Fin de code Javascript
</script>
