<!-- code HTML -->
<label>Ajouter nombre :</label>
<input type="text" id="number">
<button id="binaire">Binary To Decimal</button>
<button id="decimal">Decimal To Binary</button>
<pre id="resultat"></pre>

<script>


    //Mode 1 = BinaryToDecimal ; Mode 2 = DecimalToBinary ;
    document.getElementById("binaire").addEventListener("click", function(){Resultat(1)});
    document.getElementById("decimal").addEventListener("click", function(){Resultat(2)});


    function Resultat(mode){

        let nb1 = document.getElementById("number").value;
        let nb2 = mode == 1 ? BinaryToDecimal(nb1) : DecimalToBinary(nb1);

        document.getElementById("resultat").innerHTML += nb1 + " = " + nb2 + "\n";

    }

    //Chaque bit est élévé à la puissance de 2 qui correspond à son rang
    function BinaryToDecimal(nb1)
    {
        let resultat = 0;
        let exposant = 0;
        for (let i = nb1.length - 1; i >= 0; i--)
        {
            if (nb1[i] == '1')
            {
                resultat += Math.pow(2, exposant); //resultat = resultat + Math.Pow(2, exposant)
            }
            exposant++;
        }
        return resultat;
    }

    function DecimalToBinary(nb1)
    {

        let resultat = "";
        let reste = 0;
        do
        {
            reste = nb1 % 2;
            resultat = reste + resultat;
            nb1 = parseInt(nb1 / 2);

        }
        while (nb1 != 0);

        return resultat;
    }




</script>
