<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP19 - Somme de n entiers avec proposition de relancer le programme</h1>

<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<pre id="message"></pre>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>
    //Code Javascript

    let reponse = "";

    do{
        let resultat = message();
        reponse = prompt(resultat + "Voulez vous continuer le programme ? (O/N)");
    }
    while (reponse == "O");



    //Fonction
    function message() {
        //variable nombre
        let n = prompt("Entrer un nombre");
        let somme = 0;
        let i = 1;

        while (i <= n)
        {
            somme = somme + i;
            i = i + 1; //ou i++
        }
        let resultat = "La somme des " + n + " entiers est égale à " + somme + "\n";
        document.getElementById("message").innerHTML += resultat;
        return resultat;
    }

    //Fin de code Javascript
</script>
