<pre id="message"></pre>

<script>

    let tableau = [];

    for (let i = 0; i < 6; i++)
    {
        tableau.push(i*i);
        document.getElementById("message").innerHTML += tableau[i] + "\n";
    }

</script>