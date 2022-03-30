<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP20 - Saisie contrôlée d'un numéro de mois</h1>
<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<p id="message"></p>
<script>
    //Code Javascript
    let valide = false;
    let mois;
    while (!valide)
    {
        mois = prompt("Entrer un nombre");
        valide = mois >= 1 && mois <= 12;
    }
    document.getElementById("message").innerHTML = "Bravo, vous avez saisi " + mois;
    //Fin de code Javascript
</script>
