<?php

session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/formulaire_nounou.css" />
    
    <title>Vos enfants | Les Bambins</title>
</head>
<body>



<?php


//if (isset($_SESSION['prenom']) AND isset($_SESSION['id']))
//{
    echo 'Compte de ' . $_SESSION['prenom'];
//}
?>



<form name="ajout_enfant"  method='post' action='traitement_ajout_enfant.php'>

    <div>    
            <h2>
                <label for="enfant">Enfant 1 :</label>
            </h2>
            
            <p>
                <label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom" placeholder="Son prénom..." required/>
                <label for="ddn">Date de naissance :</label><input type="date" name="ddn" id="ddn" placeholder="Sa date de naissance..." required/>
            </p>
            
            <p>
                <label for="restriction">Restrictions alimentaires :</label>
            </p>
           
            <p>
                <textarea name="restriction" id="restriction" placeholder="Indiquez-nous ses éventuelles restrictions alimentaires..." rows="3" cols="80"></textarea>
            </p>          
            
            <p><input type="button" onclick="ajout(this);" value="+"/></p>
            
            <p>
                <input type="submit" value="Envoyer" />
            </p>   
        
    </div>
</form>
</body>
</html>

    <script type="text/Javascript>
        fonction ajout(element){
            var formulaire = document.ajout_enfant;
               // On clone le bouton d'ajout
            var ajout = element.cloneNode(true);
               // Crée un nouvel élément de type "input"
            var champ = document.createElement("input");
        }
    </script>
    


