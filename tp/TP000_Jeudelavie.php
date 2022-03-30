<style>
    .cellule {
        background-color: white;
        border: 1px solid black;
        display: inline-block;
    }

    #container {
        width: 800px;
        text-align: center;
        margin: 0 auto;
    }

    #grid, #message {
        border: 1px solid black;
        padding: 10px;
        float: left;
        margin: 0 10px;
        text-align: left;
    }

    #message {
        width: 270px;
        overflow: auto;
    }

    .white {
        background-color: white;
    }

    .black {
        background-color: black;
    }
</style>
<div id="container">
    <h2>Jeu de la vie en Javascript - DWWM01</h2>
    <div id="grid">

    </div>
    <pre id="message"></pre>
</div>
<button id="button">Run</button>


<script>
    //Taille border cellule 2px
    const CELBORDER = 2;
    //Grille de 20 x 20
    let grid = 20;
    //Taille cellule 20px * 20px
    let celluleSize = 20;
    let cellules = [];
    let cellulesTmp = [];

    //Adapter CSS
    let gridCss = document.getElementById("grid");
    let messageCss = document.getElementById("message").style.height = (grid * (celluleSize + CELBORDER)).toString();
    gridCss.style.width = (grid * (celluleSize + CELBORDER)).toString();
    gridCss.style.height = (grid * (celluleSize + CELBORDER)).toString();

    //event Button
    document.getElementById("button").addEventListener("click",run);

    //lancement des fonctions
    grille(1);

    /**
     * Function génération grille
     * @param mode number - 1 init, 2 jeu de la vie, 3 update,
     */
    function grille(mode) {
        let id = 0;
        // colonne
        for (let x = 0; x < grid; x++) {
            //ligne
            for (let y = 0; y < grid; y++) {
                switch (mode) {
                    case 1:
                        document.getElementById("grid").innerHTML += `<div style="width:${celluleSize}px;height:${celluleSize}px" class="cellule white" id="${id}" onclick="clickCellule(${x},${y},${id})"></div>`;
                        cellules[id] = 0;
                        cellulesTmp[id] = 0;
                        break;
                    case 2:
                        jeuDelavie(id);
                        break;
                    case 3:
                        cellules[id] = cellulesTmp[id];
                        if(cellules[id] == 0){
                            document.getElementById(id).classList.replace("black", "white");
                        }else{
                            document.getElementById(id).classList.replace("white", "black");
                        }
                        break;

                }
                id++;
            }
        }
    }

     /**
     * Function click cellule color White/Black
     * @param x number coord X
     * @param y number coord Y
     * @param id number
     */
    function clickCellule(x, y, id) {
        let value = 0;
        let cellule = document.getElementById(id).classList;
        if (cellule.contains('white')) {
            cellule.replace("white", "black");
            value = 1;
        } else {
            cellule.replace("black", "white");
        }
        document.getElementById("message").innerHTML += `Cellule ${x},${y} valeur ${value} (${id}) \n`;
        cellules[id] = value;
        //jeuDelavie(id);
    }

    /**
     *
     * @param id
     */
    function jeuDelavie(id) {

        //  0   1   2
        //  3   x   4
        //  5   6   7
        let celTab = [];
        let voisine = 0;

        celTab[0] = id - grid - 1;
        celTab[1] = id - grid;
        celTab[2] = id - grid + 1;
        celTab[3] = id - 1;
        celTab[4] = id + 1;
        celTab[5] = id + grid - 1;
        celTab[6] = id + grid ;
        celTab[7] = id + grid + 1;

        //total voisine
        for (let c = 0;c < celTab.length ; c++){
            if((celTab[c] >= 0) && (celTab[c] <= grid * grid)  && (cellules[celTab[c]] == 1)){
                voisine++;
            }
        }
        console.log(id + ">" + voisine);

        //si trois celllule voisines
        if(voisine == 3){
            cellulesTmp[id] = 1;
            //document.getElementById("message").innerHTML += "3 voisines\n";
            document.getElementById("message").innerHTML += "Cellule " + id + " update vivante\n";
            //sinon, si cellule inférieur à 2 ou supérieur à 3, alors meurt
        }else if(voisine < 2 || voisine > 3){
            cellulesTmp[id] = 0;
            //document.getElementById("message").innerHTML += "moins de 2 voisines et plus de 3 voisines\n";
            document.getElementById("message").innerHTML += "Cellule " + id + " update mort\n";
        }else{
            cellulesTmp[id] = cellules[id];
            document.getElementById("message").innerHTML += "Cellule " + id + " etat egal " + cellules[id] ? "vivant\n" : "mort\n";
        }
    }

     function run() {
        console.log("run");

        for (let i = 0;i< 50;i++){

            //timer pour actualiser l'affichage
            setTimeout(function() {
                grille(2);
                grille(3);
                document.getElementById("message").innerHTML += `Iteration ${i}\n`;
            },1000);

        }

    }
</script>