<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP10 - Catégorie</h1>

<label for="name">Age de l'enfant ?:</label>
<input type="text" id="age" name="age" required>
<button id="button">Valider</button>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<p id="message"></p>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript
    //Ajout d'un evenement de type click sur le boutton
    document.getElementById("button").addEventListener("click",message);

    //Fonction
    function message() {
        //variable nombre
        let age = document.getElementById("age").value;
        let categorie = "Aucune catégorie";

        if (age >= 12)
        {
            categorie = "Cadet";
        }
        else if (age >= 10)
        {
            categorie = "Minime";
        }
        else if (age >= 8)
        {
            categorie = "Pupille";
        }
        else if (age >=6)
        {
            categorie = "Poussin";
        }
        else
        {
            categorie = "Aucune catégorie";
        }

        document.getElementById("message").innerHTML = "La catégorie d'un enfant agé de " + age + " ans est " + categorie;

    }

    //Fin de code Javascript
</script>
