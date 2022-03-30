<!-- code HTML -->
<label>Ajouter une chaine :</label>
<input type="text" id="mot" value="AAAaaBbbCcCC">
<button id="compresser">compresser</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("compresser").addEventListener("click", function(){

        document.getElementById("resultat").innerHTML += Compression(document.getElementById("mot").value) + "\n";

    });


    function Compression(mot){

        let resultat = "";
        let compteurLettre = 1;

        for (let i = 0; i < mot.length ; i++)
        {

            if(mot[i] == mot[i + 1]){
                compteurLettre++;
            }else{
                resultat += compteurLettre + mot[i];
                compteurLettre = 1;
            }

        }
        return resultat;

    }




</script>
