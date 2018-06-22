<?php

session_start();



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

$prenom = $_POST['prenom'];
$ddn = $_POST['ddn'];
$restriction=$_POST['restriction'];

$bdd->exec('INSERT INTO Enfant(prenom_e,ddn_e,restric_alim_e,id_parent) VALUES ("'.$prenom.'"'.$ddn.'"'.$restriction.'"'.$_SESSION['id'].')');





header('Location:../profils/profil_parent.php');
?>
