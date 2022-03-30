<h1>TPF10 - Compression RLE</h1>

<label>Saisir la chaine a compresser</label>
<input id="rle" type="text">
<button id="valider">Valider</button>
<p id="message"></p>
<script>

    document.getElementById("valider").addEventListener("click", rle);


    function rle() {

        let chaine = document.getElementById("rle").value;
        let rle = "";
        let compteur = 1;

        for (let i = 0; i < chaine.length; i++){

            if (chaine[i] == chaine[i + 1]){
                compteur++;
            }else{

                rle += chaine[i] + compteur;
                compteur = 1;

            }

        }

        document.getElementById("message").innerHTML = rle;

    }


</script>