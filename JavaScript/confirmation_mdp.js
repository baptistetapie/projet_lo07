

function surligne(champ, erreur)
{
    if(erreur)
        champ.style.backgroundColor = "#EF1800";


    else
        champ.style.backgroundColor = "#00CC00";
}

function verifMdp2(champ)
{
    if(champ.value != document.getElementById('mdp').value)

    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}