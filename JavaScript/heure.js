

function surligne(champ, erreur)
{
    if(erreur)
        champ.style.backgroundColor = "#EF1800";


    else
        champ.style.backgroundColor = "#00CC00";
}



function verifheure2(champ)
{
    if(champ.value <= document.getElementById('hd').value)

    {
        alert('Heure début supérieur à heure de fin');
        surligne(champ, true);
        return false;


    }
    else
    {
        surligne(champ, false);
        return true;
    }
}


// var hd = document.getElementById('hd').value;
// var hf = document.getElementById('hf').value;
//
// function verif(hd,hf) {
//     if(hf<=hd)
//     {
//         alert('Heure début supérieur à heure de fin');
//     }

// }