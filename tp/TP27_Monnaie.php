
<h1>TP27 - Rendu de monnaie</h1>

<pre id="factures"></pre>
<label>Montant versé par le client :</label>
<input id="montant">
<button id="button">Valider</button>
<pre id="monnaie"></pre>
<script>

    document.getElementById("button").addEventListener("click",montant);
    let factures = 0;
    let article = 0;

    do{

        article = Number(prompt("Veuillez saisir le prix de l'article"));
        factures += article;

    }while(article != 0);


    document.getElementById("factures").innerHTML = `La facture est de ${factures} €`;

    function montant(){

        let montant = Number(document.getElementById("montant").value);
        let message = "";
        let renduMonnaie = montant - factures;
        let nbBillet10 = 0;
        let nbBillet5 = 0;

        message += `La monnaie à rendre est de ${renduMonnaie} € \n`;
        message += `Rendu monnaie :\n`;

        while(renduMonnaie >= 10){
            nbBillet10++;
            renduMonnaie -= 10;
        }
        if(renduMonnaie >= 5){
            nbBillet5++;
            renduMonnaie -= 5;
        }

        message += `Nombre de billet de 10 € = ${nbBillet10}\n`;
        message += `Nombre de billet de 5 € = ${nbBillet5}\n`;
        message += `Nombre de pièce de 1 € = ${renduMonnaie}\n`;

        document.getElementById("monnaie").innerHTML += message;

    }

</script>