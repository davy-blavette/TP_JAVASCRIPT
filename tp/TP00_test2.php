<style>
    .cellule {
        background-color: white;
        border: 1px solid lightgray;
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        font-size: 1em;
    }
    .carre
    {
        display: inline-block;
        float: left;
        border: 1px solid gray;
        width: 120px;
    }

    .actif{
        background-color: lightblue;
    }

    #container {
        width: 800px;
        text-align: center;
        margin: 0 auto;
    }

    #grid, #message {
        border: 4px solid black;
        float: left;
        margin: 0 10px;
        text-align: left;
        width: 366px;
        height: 366px;
    }

    #message {
        width: 270px;
        overflow: auto;
        display: block;
    }

    .import{
        text-align: center;
        border-bottom: 1px solid black;
        text-align: center;
        padding-bottom: 10px;
    }

</style>
<div id="container">
    <h2>Générateur de Sudoku - DWWM01</h2>
    <div id="grid">

    </div>
    <div id="message">
        <div class="import">
            <input type="text" id="impSudo" value="080100007000070960026900130000290304960000082502047000013009840097020000600003070" />
            <br>
            <button id="import">Import</button>
        </div>

    </div>
</div>

<script>

    //Grille de 3 x 3
    let grid = 9;

    grille();
    document.getElementById("import").addEventListener("click", importsudo);

    function grille(){
        let id = 0;
        //générer 9 carrés div, lignes et colonnes
        for (let x = 1; x <= grid; x++) {
            //créer élément div avec class carré
            let carre = document.createElement('div');
            carre.classList.add("carre");
            //générer 9 cellules par carré
            for (let y = 1; y <= grid; y++) {
                //créer céllule
                let cel = document.createElement('input');
                cel.classList.add("cellule");
                cel.setAttribute("onclick", move(x,y));
                //ajout cel dans carre
                carre.appendChild(cel);
                //ajoute l'ensemble à grid
                document.getElementById("grid").appendChild(carre);
                id++;
            }
        }
    }

    function importsudo(){
        let impSudo = document.getElementById("impSudo").value;

        for (let id = 0; id < impSudo.length;id++){

            console.log(document.getElementById(id).value);
            if (impSudo[id] > 0){
                document.getElementById(id).value = impSudo[id];
                document.getElementById(id).classList.add("actif");
            }

        }

    }

</script>