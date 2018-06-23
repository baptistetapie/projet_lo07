<?php

session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <SCRIPT LANGUAGE="JavaScript">
        document.location.href="../profils/profil_parent.php"
    </SCRIPT>
    <meta charset="UTF-8">
    <title>Title</title>
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



//variables de transfert

$prenom = $_POST['prenom'];
$ddn = $_POST['ddn'];
$restriction=$_POST['restriction'];

//echo $prenom. $ddn . $restriction . $_SESSION['id'];

$bdd->exec('INSERT INTO enfant(prenom_e,ddn_e,restric_alim_e,id_parent)
                      VALUES ("'.$prenom.'","'.$ddn.'","'.$restriction.'","'.$_SESSION['id'].'")');







?>
</body>
</html>
