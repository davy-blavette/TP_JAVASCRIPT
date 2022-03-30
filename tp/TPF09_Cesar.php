<!-- code HTML -->
<label>Ajouter une chaine :</label>
<input type="text" id="message" value="Ceci est un message secret !">
<button id="chiffrer">chiffrer</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("chiffrer").addEventListener("click", function(){

        let cle = 3;
        //On passe le message en majuscule - .toUpperCase()
        document.getElementById("resultat").innerHTML += CodeCesar(document.getElementById("message").value, cle) + "\n";

    });


    function CodeCesar(message, cle){

        let resultat = "";
        let alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let special = "!? .#()";
        let reference = alphabet + special + alphabet.toLowerCase();

        //Parcours du message en clair pour le chiffrer
        for (let i = 0; i < message.length ; i++)
        {

            //Recherche la position de chaque caractère dans l'alphabet
            let j = 0;
            while (j < reference.length && message[i] != reference[j])
            {
                j++;
            }
            //Calcul de la position du caractère chiffré
            j = (j + cle);
            if (j >= reference.length)
            {
                j = j % reference.length;
            }
            if (j < 0)
            {
                j = reference.length + j;
            }
            resultat += reference[j];

        }
        return resultat;

    }




</script>
