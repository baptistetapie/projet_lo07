<?php

$heure = date("H");

if($heure<19)
{
    echo "Bonjour " .  $_POST['prenom'] ."<br/>";
}
else
{
    echo "Bonsoir " . $_POST['prenom']."<br/>" ;
}

?>

Merci pour votre inscription ! <br/>

    <!--    PARTIE REMPLISSAGE BDD   -->


<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=bd_nounou;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

//INSERTION BDD

    $prenom =$_POST['prenom'];
    $nom = $_POST['nom'];
    $email= $_POST['email'];
    $ville = $_POST['ville'];
    $tel=$_POST['tel'];
    $infos = $_POST['infos'];
    $identifiant= $_POST['identifiant'];
    $mdp = $_POST['mdp'];


//Commande insertion sql


$bdd->exec('INSERT INTO parent(prenom_p,nom_p,ville_p,email_p,tel_p, infos_p, identifiant_p,mdp_p) 
                      
                      VALUES ("'.$prenom.'","'.$nom.'","'.$ville.'","'.$email.'","'.$tel.'","'.$infos.'","'.$identifiant.'","'.$mdp.'")');




$reponse->closeCursor(); // Termine le traitement de la requête

?>