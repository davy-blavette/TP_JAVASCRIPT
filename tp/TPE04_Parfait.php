<!-- code HTML -->
<label>Ajouter un nombre :</label>
<input type="text" id="nombre" value="28">
<button id="parfait">Est il parfait ?</button>
<button id="max">Afficher nombres parfait < 10 000</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("parfait").addEventListener("click", function(){

        let nombre = document.getElementById("nombre").value;
        document.getElementById("resultat").innerHTML += nombre + (Parfait(nombre) ? " est " : " n'est pas ") + "parfait.\n";

    });

    document.getElementById("max").addEventListener("click", function(){

        for (let i = 2;i < 10000;i++){

            if(Parfait(i)){

                document.getElementById("resultat").innerHTML += i + ", est un nombre parfait.\n"

            }

        }
    });

    function Parfait(nb){

        let sommeDiviseur = 0;
        //chercher diviseur
        for (i = 1; i < nb; i++){
            //Vérifier si diviseur est entier
            if(nb%i == 0){
                sommeDiviseur += i;
            }
        }

        return sommeDiviseur == nb ? true : false;

    }



</script>
