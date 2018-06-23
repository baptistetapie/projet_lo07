<?php

session_start();
?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <SCRIPT LANGUAGE="JavaScript">
            document.location.href="../profils/profil_nounou_post.php"
        </SCRIPT>
        <meta charset="UTF-8">

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


$hd=$_POST['hd'];
$hf=$_POST['hf'];
$da=$_POST['da'];

$bdd->exec('INSERT INTO disponibilite(hd_dispo,hf_dispo,date_dispo,id_nounou_dispo) 
                                        VALUES("'.$hd.'","'.$hf.'","'.$_SESSION['id'].'")');





?>

