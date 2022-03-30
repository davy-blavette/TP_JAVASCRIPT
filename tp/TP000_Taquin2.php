
<!DOCTYPE HTML>
<html lang="fr"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <title>Slide Puzzle</title>
    <style>
        div#jeu {
            margin: 0 auto 0 auto;
            width: 416px;
        }
        button.case, button.emptycase {
            width: 100px;
            height: 100px;
            font-size: 200%;
            float:left;
            border: solid 1pt black;
            margin: 1px 2px 1px 2px;
        }
        button.emptycase {
            background-color: inherit;
            border: none;
        }
        hr {
            clear: both;
            visibility: hidden;
            margin: 0;
            padding: 0;
        }
    </style>
    <script>
        /* on mémorise l'emplacement de la case vide */
        var elig = 4;
        var ecol = 4;
        var nbclicks = 0;
        /* Fonction qui échange la case (lig,col) avec la case vide */
        function move (lig,col) {
            if (
                ((elig==lig) && ((col==ecol-1)||(col==ecol+1)))
                || ((ecol==col) && ((lig==elig-1)||(lig==elig+1)))
            ) {
                /* mise à jour du nombre de clics */
                nbclicks = nbclicks + 1;
                /* on récupère l'élément compteur */
                var noeud_compteur = document.getElementById('compteur');
                /* couper son fils */
                noeud_compteur.removeChild(noeud_compteur.childNodes[0]);
                /* créer un nouveau noeud textuel avec la valeur nbclicks */
                var compteur_txt;
                if (nbclicks==1) {
                    compteur_txt = document.createTextNode('un seul coup joué');
                } else {
                    compteur_txt = document.createTextNode(nbclicks+' coups joués');
                }
                /* ajouter ce noeud textuel comme fils de l'élément compteur */
                noeud_compteur.appendChild(compteur_txt);
                /* on récupère les identifiants des deux boutons concernés */
                var bname  = 'case'+lig+col;
                var ename  = 'case'+elig+ecol;
                /* on récupère les noeuds correspondant à ces boutons */
                var bnode  = document.getElementById(bname);
                var enode  = document.getElementById(ename);
                /* on récupère les fils textuels des deux boutons */
                var bvalue = bnode.removeChild(bnode.childNodes[0]);
                var evalue = enode.removeChild(enode.childNodes[0]);
                /* on échange ces fils */
                bnode.appendChild(evalue);
                enode.appendChild(bvalue);
                /* on échange les classes des deux boutons */
                bnode.setAttribute('class','emptycase');
                enode.setAttribute('class','case');
                /* on enlève le "focus" sur le bouton cliqué */
                bnode.blur();
                /* on mémorise l'emplacement de la case vide */
                elig   = lig;
                ecol   = col;

            }
        }
    </script>
</head><body>
<h1>Slide Puzzle</h1>
<p id="compteur">Aucun coup joué</p>
<div id="jeu">
    <button id="case11" class="case" onclick="move(1,1);">1</button>
    <button id="case12" class="case" onclick="move(1,2);">2</button>
    <button id="case13" class="case" onclick="move(1,3);">3</button>
    <button id="case14" class="case" onclick="move(1,4);">4</button>
    <hr>
    <button id="case21" class="case" onclick="move(2,1);">5</button>
    <button id="case22" class="case" onclick="move(2,2);">6</button>
    <button id="case23" class="case" onclick="move(2,3);">7</button>
    <button id="case24" class="case" onclick="move(2,4);">8</button>
    <hr>
    <button id="case31" class="case" onclick="move(3,1);">9</button>
    <button id="case32" class="case" onclick="move(3,2);">10</button>
    <button id="case33" class="case" onclick="move(3,3);">11</button>
    <button id="case34" class="case" onclick="move(3,4);">12</button>
    <hr>
    <button id="case41" class="case" onclick="move(4,1);">13</button>
    <button id="case42" class="case" onclick="move(4,2);">14</button>
    <button id="case43" class="case" onclick="move(4,3);">15</button>
    <button id="case44" class="emptycase" onclick="move(4,4);">&nbsp;</button>
    <hr>
</div>
</body></html>
