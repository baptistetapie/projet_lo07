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


//variables de transfert

$nom = $_POST['nom'];
$email =$_POST['email'];
$ville = $_POST['ville'];
$orga = $_POST['orga'];

$bdd->exec('INSERT INTO parent(nom_p,ville_p,email_p,organisation_p) VALUES ("'.$nom.'","'.$ville.'","'.$email.'","'.$orga.'")');




//$bdd->exec('UPDATE parent SET ville_p = \'Capvern\' WHERE nom_p = \'TAPIE\'') ;



$reponse->closeCursor(); // Termine le traitement de la requête
?>