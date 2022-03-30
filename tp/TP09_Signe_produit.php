<!-- code HTML -->
<!-- Balise h1 pour faire un titre avec l'attribut id pour l'identifier -->
<h1 id="titre">TP09 - Signe d'un produit</h1>

<label for="name">Saisir un nombre 1 :</label>
<input type="text" id="n1" name="n1" required>
<label for="name">Saisir un nombre 2 :</label>
<input type="text" id="n2" name="n2" required>
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
        let n1 = document.getElementById("n1").value;
        let n2 = document.getElementById("n2").value;

        //Signe du produit de 2 nombres
        //On ne traitera pas le cas du produit null
        //Un produit est positif si les 2 nombres sont positifs ou si les 2 nombres sont négatifs
        if ((n1 > 0 && n2 > 0) || (n1 < 0 && n2 < 0))
        {
            document.getElementById("message").innerHTML = n1 + " x " + n2 + " est positif";
        }
        else
        {
            document.getElementById("message").innerHTML = n1 + " x " + n2 + " est négatif";
        }
    }

    //Fin de code Javascript
</script>
