<h1>TP26 - Plus Grand nombre</h1>
<pre id="message"></pre>
<script>

    let nombre;
    let max = 0;
    let i = 0;
    let counter = 0;

    do{
        i++;
        nombre = prompt("Veuillez saisir un nombre");
        if(max < nombre){
            max = nombre;
            counter = i;
        }

    }while (nombre != 0)

    document.getElementById("message").innerHTML += "Le plus grand nombre est " + max + ", saisie à la " + counter + "ème proposition.";

</script>