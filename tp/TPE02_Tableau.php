<!-- code HTML -->
<label>Ajouter un nombre :</label>
<input type="text" id="nombre" value="">
<button id="verifier">Verifier nombre</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("verifier").addEventListener("click", function(){

        let nombre = document.getElementById("nombre").value;
        document.getElementById("resultat").innerHTML += "Nombre " + nombre + " - " + Verifier(nombre) + "\n";

    });


    function Verifier(nombre){

        let tableau = [1, 2, 4, 2, 4, 2, 8, 12];
        let compteur = 0;
        let resultat = "";

        //boucle tableau
        for(let i = 0; i < tableau.length; i++){

            if(tableau[i] == nombre){
                compteur++;
            }

        }

        //analyse de compteur
        switch (compteur) {

            case 0:
                resultat = "Non présent dans le tableau";
                break;
            case 1:
                resultat = "Présent une seule fois dans le tableau";
                break;
            default:
                resultat = "Présent plusieurs fois dans le tableau";
                break;
        }

        return resultat;

    }




</script>
