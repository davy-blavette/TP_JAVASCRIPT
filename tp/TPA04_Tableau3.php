<pre id="message"></pre>

<script>

    let tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
    let tab2 = [7, 6, 5, 2, 1, 3, 7, 4];
    let tab3 = [];

    for (let i = 0; i < tab1.length; i++)
    {
        tab3.push(tab1[i] + tab2[i]);
        document.getElementById("message").innerHTML += tab3[i] + ", ";
    }

</script>