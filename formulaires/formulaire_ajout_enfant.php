<?php

session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJOUTER UN ENFANT</title>
</head>
<body>



<?php


//if (isset($_SESSION['prenom']) AND isset($_SESSION['id']))
//{
    echo 'Compte de ' . $_SESSION['prenom'];
//}
?>



<form name="ajout_enfant" method='post' action='traitement_ajout_enfant.php'>

    <p>
        <label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom" placeholder="Votre prénom..." required/>
    </p>

    <p>
        <label for="ddn"> Date de naissance :</label><input type="date" name="ddn" id="ddn" required>
    </p>

    <p>
        <textarea name="restriction" id="restriction" placeholder="Restrictions alimentaires de votre enfant " cols="60" rows="4" required></textarea>
    </p>


    <p>
        <input type="submit" value="Envoyer" />
    </p>


</form>
</body>
</html>
