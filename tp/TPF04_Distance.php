<!-- Un élément de paragraphe HTML déstiné à restituer les résultats -->
<pre id="message"></pre>
<!-- Un simple code en javascript pour écrire une ligne -->
<script>

    let x1 = 0;
    let y1 = 1;
    let x2= -2;
    let y2 = 4;

    document.getElementById("message").innerHTML += "Distance entre les points A(" + x1 + "," + y1 + ") et B(" + x2 + "," + y2 + ") = " + Distance(x1, y1, x2, y2) + "\n";
    document.getElementById("message").innerHTML += "Distance entre les points O(0,0) et C(1,1) = " + Distance(0, 0, 1, 1) + "\n";

    function Distance (xA, yA, xB, yB){

        return Math.sqrt(Math.pow(xB - xA, 2) + Math.pow(yB - yA, 2));

    }

</script>
