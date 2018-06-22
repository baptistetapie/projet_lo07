<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VALIDATION NOUNOU</title>
<!--    <link rel="stylesheet" href="../CSS/validation_nounou.css" />-->
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

$total=$_POST['compteur'];



$compteur=0;
$ajout=0;
$refus=0;

while ($compteur<$total)
{
    $valider = $_POST['valider'.$compteur.''];
    $id = $_POST['idtemp' . $compteur . ''];
    $compteur=$compteur+1;




    if ($valider==1) {
        $bdd->exec('UPDATE nounou SET valide_n=1 WHERE identifiant_n="' . $id . '"');
        $ajout=$ajout+1;
    }
    else
        {
        $bdd->exec('DELETE FROM nounou WHERE identifiant_n="' . $id . '"');

        $refus=$refus+1;

//        mail()
    }
}

echo 'BILAN : <br/> ' . $ajout . ' ajouts <br/> ' . $refus.' refus' ;
    ?>

</body>
</html>
