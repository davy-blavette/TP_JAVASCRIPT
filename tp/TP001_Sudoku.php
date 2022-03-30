
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-style-type" content="text/css" />
    <meta http-equiv="content-language" content="fr" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dewep.net, réalisé par Aurélien Maigret, est dédié à la conception de sites internet.">
    <meta name="author" content="Dewep.net, MAIGRET Aurélien">
    <title>Sudoku</title>
    <style type="text/css">
        h1
        {
            text-align: center;
            color: #D14836;
            text-shadow: -1px 2px 2px #999;
            font-size: 40px;
        }
        table
        {
            border-spacing: 0;
            border-top: 2px solid #333;
            border-left: 2px solid #333;
            border-bottom: 1px solid #333;
            border-right: 1px solid #333;
        }
        td
        {
            width: 20px;
            height: 20px;
            padding: 5px;
            border: 1px solid #333;
            text-align: center;
            font-weight: bold;
        }
        td.vide
        {
            background-color: #EEEEF0;
        }
        td:nth-child(3n)
        {
            border-right: 2px solid #333;
        }
        tr:nth-child(3n) td
        {
            border-bottom: 2px solid #333;
        }
        body
        {
            background-color: #E5DED8;
        }
        .bloc
        {
            background-color: #EEEEE0;
            border: 1px solid #AAA;
            padding: 15px;
            margin: 50px auto 0;
            width: 900px;
            border-radius: 3px;
        }
        .bloc_left
        {
            float: left;
            width: 300px;
            padding: 0 75px;
        }
        .bloc_right
        {
            float: right;
            width: 300px;
            padding: 0 75px;
        }
        .bloc h2
        {
            text-align: center;
            color: #D14836;
            text-shadow: -1px 1px #CCC;
        }
        .red, #erreur
        {
            color: #D14836;
            font-weight: bold;
            text-align: center;
        }
        select
        {
            padding: 4px 4px 4px 10px;
            min-width: 300px;
            margin: 0 auto;
            text-align: center;
        }
        .generateSudoku
        {
            text-align: center;
            text-shadow: -1px 1px #CCC;
            cursor: pointer;
            color: #333;
            font-weight: bold;
            font-size: 19px;
            text-transform: uppercase;
        }
    </style>
    <script type="text/javascript">

        //+ Jonas Raoni Soares Silva
        //@ http://jsfromhell.com/array/shuffle [rev. #1]
        function shuffle(array)
        {
            for(var j, x, i = array.length; i; j = parseInt(Math.random() * i), x = array[--i], array[i] = array[j], array[j] = x);
            return array;
        };

        function generateSudoku()
        {
            var nb_case_vide = document.getElementById("niveau").value;
            var nb_max_loop = 10000;

            var grille = new Array(); // Init grille
            var lignes = new Array(); // Init lignes
            var colonnes = new Array(); // Init colonnes
            var carres = new Array(); // Init cases
            var i_while = 0; // Init nombre de while
            var grille_complete = false; // Init is_complete

            outerwhile: // Point de référence
                while ((i_while < nb_max_loop) && !grille_complete) // Boucle tant que la grille n'est pas complète et que l'on n'a pas dépassé le maximum
                {
                    i_while++; // On ajoute 1 à la boucle

                    for (var i = 1; i <= 9; i++)
                    {
                        grille[i] = new Array(); // On crée chaque ligne de la grille
                        lignes[i] = new Array(); // On crée un array pour les lignes
                        colonnes[i] = new Array(); // On crée un array pour les colonnes

                        for (var j = 1; j <= 9; j++)
                        {
                            grille[i][j] = 0; // On passe toutes les cases à 0
                            lignes[i][j] = j; // On complète toutes les possibilités de la ligne
                            colonnes[i][j] = j; // On complète toutes les possibilités de la colonne
                        };
                    };
                    for (var i = 1; i <= 3; i++)
                    {
                        carres[i] = new Array(); // On crée les trois lignes de cases

                        for (var j = 1; j <= 3; j++)
                        {
                            carres[i][j] = new Array(); // On crée les trois colonnes de cases dans chaque ligne
                            for (var k = 1; k <= 9; k++)
                            {
                                carres[i][j][k] = k; // Et on complète toutes les possibilités de la case
                            };
                        };
                    };
                    for (var y = 1; y <= 9; y++)
                    {
                        for (var x = 1; x <= 9; x++)
                        {
                            var possibilites = new Array();
                            var index = 0;

                            for (var k = 1; k <= 9; k++)
                            {
                                if (!lignes[y][k]) continue;
                                if (!colonnes[x][k]) continue;
                                if (!carres[Math.ceil(y/3)][Math.ceil(x/3)][k]) continue;

                                possibilites[index] = k;
                                index++;
                            };

                            if (possibilites.length == 0) continue outerwhile;

                            var nb = possibilites[Math.floor((Math.random() * possibilites.length))];
                            grille[y][x] = nb;
                            lignes[y][nb] = undefined;
                            colonnes[x][nb] = undefined;
                            carres[Math.ceil(y/3)][Math.ceil(x/3)][nb] = undefined;
                        };
                    };

                    grille_complete = true;
                }

            if (grille_complete)
            {
                var cases_a_vider = new Array();

                for (var i = 1; i <= 81; i++)
                {
                    if (i <= nb_case_vide) cases_a_vider[i] = true;
                    else cases_a_vider[i] = false;
                }

                cases_a_vider = shuffle(cases_a_vider);

                var html = "<table cellpadding='0'><tbody>";
                var html_enonce = "<table cellpadding='0'><tbody>";
                var count = 0;

                for (var y = 1; y <= 9; y++)
                {
                    html += "<tr>";
                    html_enonce += "<tr>";

                    for (var x = 1; x <= 9; x++)
                    {
                        count++;

                        html += "<td>" + ((cases_a_vider[count]) ? '<span class="red">' + grille[y][x] + '</span>' : grille[y][x]) + "</td>";
                        html_enonce += "<td" + ((cases_a_vider[count]) ? ' class="vide">&nbsp;' : '>' + grille[y][x]) + "</td>";
                    };

                    html += "</tr>";
                    html_enonce += "</tr>";
                };

                html += "</tbody></table>";
                html_enonce += "</tbody></table>";

                document.getElementById("grille_a_faire").innerHTML = html_enonce;
                document.getElementById("grille_solution").innerHTML = html;
                document.getElementById("resultat").style.display = 'block';
                document.getElementById("erreur").style.display = 'none';
            }
            else
            {
                var today = new Date;

                document.getElementById("resultat").style.display = 'none';
                document.getElementById("erreur").style.display = 'block';
                document.getElementById("erreur").innerHTML = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds() + " : Echec apr&egrave;s " + nb_max_loop + " tentatives.";
            }
        };

        function AjoutOptionAuSelect(this_select)
        {
            if (this_select.value == "autre")
            {
                var saisie;
                var pass = false;
                do
                {
                    if (pass) alert("La valeur est incorrecte. Elle ne doit comporter que des chiffres.");
                    saisie = prompt("Nombre de cases vides :");
                    if (saisie == null) return false;
                    pass = true;
                }
                while (saisie.match(/[^0-9]/i) && saisie != "")

                this_select.options[this_select.length] = new Option(saisie + ' case' + (saisie > 1 ? 's' : '') + ' vide' + (saisie > 1 ? 's' : ''), saisie, true, true);

                for (var i=0; i < this_select.options.length; i++)
                {
                    if (this_select.options[i].value == saisie)
                    {
                        this_select.options[i].selected = true;
                    }
                }
            }
        };
    </script>
</head>
<body onload="generateSudoku();">
<h1>Générateur de Sudoku</h1>
<div class="bloc">
    <div class="bloc_left">
        <p><select id="niveau" name="type" onchange="AjoutOptionAuSelect(this);">
                <option value="20">Facile (20 cases vides)</option>
                <option value="30" selected>Normal (30 cases vides)</option>
                <option value="40">Expert (40 cases vides)</option>
                <option value="autre">Personnalisé</option>
            </select></p>
    </div>
    <div class="bloc_left">
        <p class="generateSudoku" onclick="generateSudoku();">Générer</p>
    </div>
    <br style="clear: both;"/>
</div>
<div class="bloc" id="erreur" style="display: none"></div>
<div class="bloc" id="resultat">
    <div class="bloc_left">
        <h2>Base</h2>
        <div id="grille_a_faire"></div>
    </div>
    <div class="bloc_left">
        <h2>Solution</h2>
        <div id="grille_solution"></div>
    </div>
    <br style="clear: both;"/>
</div>
</body>
</html>