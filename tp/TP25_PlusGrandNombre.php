<h1>TP25 - Plus Grand nombre</h1>
<pre id="message"></pre>
<script>

    let nombre;
    let max = 0;
    let i = 0;
    let counter = 0;

    while (i < 20){
        i++;
        nombre = prompt("Veuillez saisir un nombre");
        if(max < nombre){
            max = nombre;
            counter = i;
        }

    }

    document.getElementById("message").innerHTML += "Le plus grand nombre est " + max + ", saisie à la " + counter + "ème proposition.";

</script>