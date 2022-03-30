<pre id="message"></pre>
<script>

    let voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

    for (let i = 0; i < voyelles.length; i++) //Length = nombre d'éléments du tableau
    {
        document.getElementById("message").innerHTML += voyelles[i] + " , ";
    }


</script>
