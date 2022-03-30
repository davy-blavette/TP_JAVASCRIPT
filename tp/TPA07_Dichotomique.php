<label>Cherche le nombre ?</label>
<input id="nombre" type="number">
<button id="chercher">Valider</button>

<pre id="message"></pre>
<script>

    let tableau = [1, 3, 4, 6, 7, 8, 10, 13, 14];

    document.getElementById("chercher").addEventListener("click", chercher);

    /**
     *
     */
    function chercher() {


        let nombre = Number(document.getElementById("nombre").value);
        let premierNombre = 0;
        let moitie = 0;
        let dernierNombre = tableau.length - 1;
        let iteration = 0;
        let message = "";


        while(premierNombre <= dernierNombre){
            debugger;
            iteration++;

            moitie = Math.round((premierNombre + dernierNombre) / 2);

            if(nombre == tableau[moitie]){
                message = `Ce nombre se trouve à l'index ${moitie}`;
                break;
            }else if(nombre > tableau[moitie]){

                premierNombre = moitie + 1;

            }else{

                dernierNombre = moitie - 1;
            }

        }

        if(premierNombre > dernierNombre){

            message = `Ce nombre n'est pas présent dans le tableau.`;

        }

        document.getElementById("message").innerHTML += `${message} après ${iteration} itération(s).\n` ;


    }

</script>
