<h1>TP24 - 10 Nombres</h1>
<pre id="message"></pre>
<script>

    let nombre;
    let i = 0;
    nombre = prompt("Veuillez saisir un nombre");
    //typeof indique le type de la variable
    console.log(typeof nombre);
    //convertir la variable de type string en nombre
    nombre = Number(nombre);

    //les trois type de conversion
    //Number(variable); parseFloat(variable); parseInt(variable)
    //String(variable); variable.toString();
    document.getElementById("message").innerHTML += "Boucle While :\n";
    while(i < 10){

        i++;
        document.getElementById("message").innerHTML += nombre + i + "<br>";

    }
    document.getElementById("message").innerHTML += "Boucle For :<br>";
    //avec boucle for
    for (let n = 1; n <= 10; n++){

        document.getElementById("message").innerHTML += nombre + n + "<br>";

    }



</script>