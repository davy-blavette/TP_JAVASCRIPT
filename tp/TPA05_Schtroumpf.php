<pre id="message"></pre>

<script>

    let tab1 = [4, 8, 7, 12];
    let tab2 = [3, 6];
    let tab3 = [];
    let somme = 0;
    let size = 0;

    for (let i = 0; i < tab1.length; i++)
    {
        for(let j = 0; j < tab2.length; j++){
            tab3.push(tab1[i] * tab2[j]);
            document.getElementById("message").innerHTML += "(" + tab1[i] + " * " + tab2[j] + ")[" + tab3[size] + "]" + " + ";
            somme += tab3[size];
            size++;
        }
    }
    document.getElementById("message").innerHTML += " = " + somme;

</script>