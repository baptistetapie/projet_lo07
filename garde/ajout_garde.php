<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GARDE AJOUTEE</title>
</head>
<body>


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

$lebon=$_POST['select'];
$hd=$_POST['hd'.$lebon];
$hf=$_POST['hf'.$lebon];
$date=$_POST['date'];
$nounou=$_POST['id_n'.$lebon];
$parent=$_SESSION['id'];
$enfant1=$_POST['garder0'];
$enfant2 = $_POST['garder1'];
$prenom_nounou=$_POST['prenom_n'.$lebon];

$bdd->exec('INSERT INTO garde(heure_deb_g,heure_fin_g,date_g,nounou_g,id_parent,id_enfant1,id_enfant2)
                      VALUES ("'.$hd.'","'.$hf.'","'.$date.'","'.$nounou.'","'.$parent.'","'.$enfant1.'","'.$enfant2.'")');


echo'Vous avez choisi '.$prenom_nounou.' pour garder vos enfants le '.$date;

?>

<a href="../profils/profil_parent.php">Retour à la page d'accueil</a>
</body>
</html>
