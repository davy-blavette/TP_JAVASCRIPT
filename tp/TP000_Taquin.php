<style>
    .cellule {
        background-color: aliceblue;
        border: 1px solid lightgray;
        display: inline-block;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        font-size: 1em;
        background-image: url("./takin/takin.png");
        background-position: 0px 100px ;
    }

    .white{

        background-color: white;
        background-image: none;
    }

    textarea{
        float: left;
        width: 100%;
        margin-bottom: 20px;
        display: none;
    }

    #container {
        width: 400px;
        text-align: center;
        margin: 0 auto;
    }

    #grid, #win {

        border: 4px solid black;
        float: left;
        margin: 0 10px;
        text-align: left;
        width: 400px;
        height: 400px;
    }

    #win{
        position: absolute;
        background-color: rgba(255,0,0,0.8);
        display: none;
    }
    #message, #nbPermutte{
        padding: 10px;
        float: left;
        text-align: center;
        width: 100%;
    }


</style>
<div id="container">
    <h2>Générateur de Takin - DWWM01</h2>
    <div id="win"></div>
    <div id="grid"></div>
    <pre id="nbPermutte"></pre>
    <pre id="message"></pre>
    <textarea id="solution"></textarea>
    <label for="select">Niveau</label>
    <select id="level">
        <option value="10">Facile</option>
        <option value="40">Débutant</option>
        <option value="80">Expert</option>
    </select>
    <button id="generer">Générer grille</button>
    <button id="affSolution">Voir solution</button>
</div>
<script>
//taille cellule
let size = 100;
//taille grille
let grid = 4;
//tableau intial
let takin;
let background = new Array();
//tableau solution
let solution;
/* on mémorise l'emplacement de la case vide */
let emptyLig;
let emptyCol;
//Nombre de coups
let nb;


document.getElementById("generer").addEventListener("click", generer);
document.getElementById("affSolution").addEventListener("click", function(){affSolution(true)});
initBackground();
generer();


//mélange le tableau et réinitialise les variables
function generer(){
    nb = 0;
    emptyLig = grid;
    emptyCol = grid;
    document.getElementById("win").style.display = "none";
    takin = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, "V"];
    solution = new Array();
    affSolution(false);
    message("nbPermutte","",false);
    message("message","",false);
    random(Number(document.getElementById("level").value));
    grille();

}

function initBackground(){
    let id = 0;
    for (let x = 1; x <= grid; x++) {
        for (let y = 1; y <= grid; y++) {
            background[id] = `${- ((y-1) * size)}px ${- ((x-1) * size)}px`;
            id++;
        }
    }
}

function verifier(){

    let verifier = false;
    //on ne souhaite pas vérifier la dernière valeur du tableau qui doit être à "V" d'où - 1
    for (let i = 0; i < takin.length - 1;i++ ){
        let cellules = document.getElementById("grid").childNodes[i];
        if(cellules.style.backgroundPosition == background[i]){
            verifier = true;
        }else{
            verifier = false;
            break;
        }

    }

    return verifier;
}

function random(level){

    let iteration = Math.floor((Math.random() * level) + level); //iteration alléatoire
    let permutation = 0;
    let old_pos = takin.indexOf("V"); //stocker la position actuel de V

    for(let i = 0; i < iteration ;i++){
        let possible = new Array(); //stock les permutation possible
        let tmpSolution = new Array(); //stock les solutions possible
        let pos = takin.indexOf("V"); //position de "V"
        //vérifier mouvement valide
        if(takin[pos - 1] && verifBorder(chercheCoord(takin[pos - 1]))){ //cellule gauche
            possible.push(pos - 1);
            tmpSolution.push(`Droite (${takin[pos - 1]})`);
        }
        if(takin[pos + 1] && verifBorder(chercheCoord(takin[pos + 1]))){//cellule droite
            possible.push(pos + 1);
            tmpSolution.push(`Gauche (${takin[pos + 1]})`);
        }
        if(takin[pos - grid]){//cellule haut
            possible.push(pos - grid);
            tmpSolution.push(`Bas (${takin[pos - grid]})`);
        }
        if(takin[pos + grid]){//cellule bas
            possible.push(pos + grid);
            tmpSolution.push(`Haut (${takin[pos + grid]})`);
        }
        //permutation alleatoire
        let permute = Math.floor(Math.random() * possible.length);

        //si le changement de case n'est pas revenir à la position antécédente, sinon pas de permutation
        if(possible[permute] != old_pos){
            //on stocke l'ancienne position avant de changer
            old_pos = pos;
            let temp = takin[possible[permute]];
            //Stock dans solution
            solution.push(tmpSolution[permute]);
            //permutation
            takin[possible[permute]] = takin[pos];
            takin[pos] = temp;
            permutation++;
            //actualise la position ligne_colonne de "V"
            trouve_empty();
        }

    }
    console.log(takin);
    message("nbPermutte",`Takin resolvable maximum ${permutation} coups.`, false);

}

function chercheCoord(valeur){
    let id = 0;
    for (let x = 1; x <= grid; x++) {
        for (let y = 1; y <= grid; y++) {
            if (valeur == takin[id]){
                let lig = x;
                let col = y;
                return [x,y];
            }
            id++;
        }
    }
}

function verifBorder(tab){

    let valide = false;
    let lig = tab[0];
    let col = tab[1];

    if(
        ((emptyLig==lig) && ((col==emptyCol-1)||(col==emptyCol+1)))
    || ((emptyCol==col) && ((lig==emptyLig-1)||(lig==emptyLig+1)))
    ){
        valide = true;
    };


    return valide;
}

//reinitialise les coordonnées de la case vide
function trouve_empty() {
    let id = 0;
    bloc_externe:
    for (let x = 1; x <= grid; x++) {
        for (let y = 1; y <= grid; y++) {
            if(takin[id] == "V"){
                emptyLig = x;
                emptyCol = y;
                break bloc_externe;//interrompt l'ensemble du bloc
            }
            id++;
        }
    }
}

function grille() {
    let id = 0;
    //supprime la grille
    document.getElementById("grid").innerHTML = "";
    //générer 9 carrés div, lignes et colonnes
    for (let x = 1; x <= grid; x++) {

        for (let y = 1; y <= grid; y++) {
            //créer céllule
            let cel = document.createElement('button');
            cel.setAttribute("id", "case_"+ x + "_" + y);
            //cel.innerHTML = takin[id] != "V" ? takin[id] : "&nbsp;";
            cel.classList.add("cellule");
            cel.style.backgroundPosition = background[takin[id]-1];
            //ajouter la fonction
            cel.setAttribute("onclick", `move(${x},${y})`);
            if(takin[id] == "V") {
                cel.classList.add("white");

            }

            //ajoute l'ensemble à grid
            document.getElementById("grid").appendChild(cel);
            id++;
        }
    }
}

function move (lig,col) {
    /* on récupère les identifiants des deux boutons à intervertir */
    let bname  = `case_${lig}_${col}`;
    let ename  = `case_${emptyLig}_${emptyCol}`;
    /* on récupère les noeuds correspondant à ces boutons */
    let bnode  = document.getElementById(bname);
    let enode  = document.getElementById(ename);
    //ne fait rien si cellule blanche
    //verifier si case valide
    if (!bnode.classList.contains('white') && verifBorder([lig,col])) {
        /* on récupère les fils textuels des deux boutons */
        let bvalue = bnode.style.backgroundPosition;
        let evalue = enode.style.backgroundPosition;
        /* on échange ces fils */
        bnode.style.backgroundPosition = evalue;
        enode.style.backgroundPosition = bvalue;
        /* on échange les classes des deux boutons */
        bnode.setAttribute('class','cellule white');
        enode.setAttribute('class','cellule');
        /* on mémorise l'emplacement de la case vide */
        emptyLig   = lig;
        emptyCol   = col;
        nb++;
        message("message", `Vous avez réalisé ${nb} coups`, false);
        if(verifier()){
            document.getElementById("win").style.display = "block";
            message("message", "Bravo vous avez gagné!", true);
        }
    }
}
function affSolution(afficher) {

    let affSolution = document.getElementById("solution");
    if(afficher){
        affSolution.style.display = 'block';
        affSolution.value = solution.reverse();
    }else{
        affSolution.style.display = 'none';
        affSolution.value = '';

    }

}

/**
 *
 * @param id
 * @param message
 * @param concat
 */
function message(id, message, concat){
    if(concat){
        document.getElementById(id).innerHTML += `${message}\n`;
    }else{
        document.getElementById(id).innerHTML = `${message}\n`;
    }
}

</script>