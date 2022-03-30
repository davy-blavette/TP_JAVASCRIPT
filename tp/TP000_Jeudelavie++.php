

<canvas id="gameCanvas" class="grid" onclick="gridClick(event)">
</canvas>

<p id="debug"></p>

<script>
    /**
     *
     * @type {HTMLCanvasElement}
     */
    let canvas = document.getElementById("gameCanvas");
    let ctx = canvas.getContext("2d");
    let sizeOfCells = 15;
    let sizeOfGridSides = 150;
    let length = sizeOfCells * sizeOfGridSides;
    let gridArray = [];
    canvas.style.border = "solid black 2px"

    canvas.style.height =  length;
    canvas.style.width = length;
    canvas.height = length;
    canvas.width = length;


    let paused = true;
    let nextStep = new Map();
    drawGridLines();

    document.addEventListener("keydown", onKeyDown)
    update();

    async function update(){
        while(true)
        {
            nextStep.clear();
            await new Promise(r => setTimeout(r, 100));

            if(paused) continue;
            else{

                for(let i = 0; i<gridArray.length;i++)
                {
                    var sant = getIfStillAliveNextTurn(i);
                    if(gridArray[i] != sant){
                        nextStep.set(i,sant);
                    }
                }

                for(const x of nextStep){
                    setCell(x[0],x[1]);
                }

            }
        }
    }

    /**
     *
     * @param id : number
     * @returns {number}
     */
    function getIfStillAliveNextTurn(id){
        let neighs = getNeighbours(id);
        let amount = 0;
        for(const n of neighs){
            if(n==-1)continue;
            if(gridArray[n]){
                amount++;
            }
        }
        if(amount == 3)return true;
        else if (amount == 2)return gridArray[id];
        else  return false;


    }

    /**
     *
     * @param id : number
     * @returns {(number)[]}
     */
    function getNeighbours(id){
        let s = sizeOfGridSides;
        let val = [id-(s+1),id-s,id-(s-1),
            id-1,    -1,   id+1,
            id+(s-1),id+s,id+s+1];
        if(id%sizeOfGridSides==0){
            val[0] = -1;
            val[3] = -1;
            val[6] = -1;
        }
        if(id%sizeOfGridSides == sizeOfGridSides-1){
            val[2] = -1;
            val[5] = -1;
            val[8] = -1;
        }
        if(parseInt(id/sizeOfGridSides) == 0){
            val[0] = -1;
            val[1]=-1;
            val[2] = -1;
        }
        if(parseInt(id/sizeOfGridSides) == sizeOfGridSides-1){
            val[6] = -1;
            val[7]= -1;
            val[8] = -1;
        }
        return val;

    }

    function onKeyDown(e) {
        if (e.code == "Enter") {
            paused = !paused;
            document.getElementById("debug").innerHTML = paused;
        }
    }

    /**
     *
     * @param event : PointerEvent
     */
    function gridClick(event){

        let intX = parseInt(event.offsetX / sizeOfCells);
        let intY = parseInt(event.offsetY / sizeOfCells);
        let cellID = intX + intY * sizeOfGridSides;

        let cellVal = gridArray[cellID];
        if(cellVal){
            setCell(cellID,false);
        }
        else{
            setCell(cellID,true);
        }
        document.getElementById("debug").innerHTML = `id:${cellID}`
    }

    /**
     *
     * @param id : number
     * @param bool : bool
     */
    function setCell(id,bool){

        id = parseInt(id);
        gridArray[id] = bool;
        let intY = parseInt(id/sizeOfGridSides);
        let intX = parseInt(id%sizeOfGridSides);

        let posX = intX * sizeOfCells +1;
        let posY = intY * sizeOfCells +1;
        if(bool){
            ctx.clearRect(posX,posY,sizeOfCells-2,sizeOfCells-2)
        }
        else{
            ctx.fillRect(posX,posY,sizeOfCells-2,sizeOfCells-2)

        }
    }


    function drawGridLines(){
        ctx.fillRect(0,0,length,length)

        for(let i = 0;i<sizeOfGridSides -1;i++){
            let pos= (sizeOfCells * i) +(sizeOfCells-1);
            ctx.clearRect(pos,0,2,length);
            ctx.clearRect(0,pos,length,2);
        }
        for(let i=0;i<sizeOfGridSides*sizeOfGridSides;i++){
            gridArray.push(false);
        }
    }
</script>