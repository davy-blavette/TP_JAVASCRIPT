<!-- code HTML -->
<label>Ajouter un mot :</label>
<input type="text" id="mot">
<button id="inverser">Inverser</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("inverser").addEventListener("click", function(){

        let mot = document.getElementById("mot").value;

        document.getElementById("resultat").innerHTML += Inverser(mot) + "\n";

        if (EstPalindrome(mot))
        {
            document.getElementById("resultat").innerHTML += mot + " est un palindrome de " + mot.length + " lettres";
        }
    });


    function Inverser(mot){

        let resultat = "";
        for (let i = mot.length - 1; i >=0 ; i--)
        {
            resultat = resultat + mot[i];
        }
        return resultat;

    }

    //Une chaine est un palindrome si est égale à la chaine inverse
    //Exemple : KAYAK
    function EstPalindrome(mot)
    {
        return mot == Inverser(mot);
    }



</script>
