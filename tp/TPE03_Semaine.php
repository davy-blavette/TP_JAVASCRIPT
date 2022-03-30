<!-- code HTML -->
<label>Ajouter une date jj/mm/aaaa :</label>
<input type="text" id="date" value="22/03/2022">
<button id="jour">Obtenir le jour de la semaine</button>
<pre id="resultat"></pre>

<script>

    //Boutton Evenement
    document.getElementById("jour").addEventListener("click", function(){

        let date = document.getElementById("date").value;
        document.getElementById("resultat").innerHTML += "Le " + date + ", tombe un " + Jour(date) + " !\n";

    });


    function Jour(date){

        let semaine = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
        let jour = parseInt(date[0] + date[1]);
        let mois = parseInt(date[3] + date[4]);
        let annee = parseInt(date[6] + date[7] + date[8] + date[9]);

        //ternaire pour c
        let c = mois < 3 ? 1 : 0;
        let a = annee - c;
        let m = mois + (12 * c) - 2;

        let j = (jour + a + Math.trunc(a/4) - Math.trunc(a/100) + Math.trunc(a/400) + Math.trunc((31*m)/12))%7;

        return semaine[j];

    }

</script>
