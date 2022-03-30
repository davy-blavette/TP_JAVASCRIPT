<!-- code HTML -->
<label>Ajouter un nombre :</label>
<input type="text" id="nombre" value="">
<button id="syracuse">Suite Syracuse</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("syracuse").addEventListener("click", function(){

        let nombre = document.getElementById("nombre").value;
        document.getElementById("resultat").innerHTML += "Suite de Syracuse pour le nombre " + nombre + "\n";
        document.getElementById("resultat").innerHTML += Syracuse(nombre);

    });


    function Syracuse(nombre){

        //verifier Nombre
        while(!(nombre >= 0 && nombre <= 100)){

            nombre = prompt("Votre nombre doit être compris entre 0 et 100");

        }

        //suite une chaine
        let suite = "";
        //boucle tant que nombre n'est pas egale à 1
        while(nombre != 1){

            suite += nombre + ", ";
            //si pair
            if (nombre%2 == 0){
                nombre /= 2;
            }else{
                nombre = (nombre * 3) + 1;
            }

        }

        //fin de la suite on ajoute 1
        suite += "1";

        return suite;

    }




</script>
