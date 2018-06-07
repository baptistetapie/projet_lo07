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

$bdd->exec('INSERT INTO parent(nom_p,ville_p,email_p,organisation_p) VALUES (\'Dupont\',\'Marseille\',\'@ciao\',\'RAS\')');




$bdd->exec('UPDATE parent SET ville_p = \'Capvern\' WHERE nom_p = \'TAPIE\'') ;



$reponse->closeCursor(); // Termine le traitement de la requête
?>