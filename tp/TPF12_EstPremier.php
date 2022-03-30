<h1>TPF12 - EstPremier</h1>
<label>Saisir un nombre</label>
<input id="nombre" type="text">
<button id="valider">Valider</button>
<button id="chercher">Chercher</button>
<pre id="message"></pre>
<script>

    let nombreTeste = new Array();

    document.getElementById("valider").addEventListener("click", ajout);
    document.getElementById("chercher").addEventListener("click", chercher);

    function ajout(){

        let nombre = document.getElementById("nombre").value;
        nombreTeste.push(nombre);
        afficher(`Nombre ${nombre} ajouté.`);

    }

    function chercher(){
        for (let i = 0; i < nombreTeste.length; i++)
        {
            if (EstPremier(nombreTeste[i]))
            {
                afficher(`Nombre ${nombreTeste[i]} est premier.`);
            }else{
                afficher(`Nombre ${nombreTeste[i]} n'est pas premier.`);
            }
        }
    }


    function EstPremier (nombre)
    {
        premier = true;

        //Un nombre premier est divisible seulement par 1 et par lui-même
        let i = 2;
        while (i < nombre && premier) //arrêt de la boucle dès qu'on a un diviseur
        {
            if (nombre % i == 0)
            {
                premier = false;
            }
            i++;
        }

        return premier;
    }

    function afficher(message){

        document.getElementById("message").innerHTML += message + '\n';

    }

</script>