<?php
session_start();
?>






<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>RESULTAT DE RECHERHCE</title>
    <link rel="stylesheet" href="../CSS/validation_nounou.css" />
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

$parent=$_SESSION['id'];

$req = $bdd->query('SELECT id_e,prenom_e FROM enfant WHERE id_parent="'.$parent.'"');

$compteurenfant=0;

echo '<form method="post" action="ajout_garde.php">';

while ($donnees = $req->fetch())
{
    if ($_POST['garder'.$donnees['id_e']])
    {
        echo  '<input type="text" name="garder'.$compteurenfant.'"  value="'.$donnees['id_e'].'" hidden  />';
    }
    $compteurenfant=$compteurenfant+1;
}





$date=$_POST['da'];


$req2=$bdd->query('SELECT * FROM disponibilite as d, Nounou as n, Parent as p 
                             WHERE date_dispo="'.$date.'" AND d.id_nounou_dispo=n.id_n AND n.ville_n="'.$_SESSION['ville'].'" AND p.id_p="'.$parent.'" ');



    echo 'Nounou Disponibles le '.$date.'<br>' ;



    echo '<table>
                    <tr>
                   <th>Début</th>
                   <th>Fin</th>
                   <th>Prénom Nounou</th>
                   <th>tel</th>
                   <th>email</th>
                   <th>age</th>
                 <th>experience</th>
                 <th>presentation</th>
                 <th>Choix<th/>
                 <tr/>';



$compteur=0;

    while ($donnees2 = $req2->fetch())
        {
            echo '<tr>
                  <td>'.$donnees2['hd_dispo'].'</td>
                  <td>'.$donnees2['hf_dispo'].'</td>
                  <td>'.$donnees2['prenom_n'].'</td>
                  <td>'.$donnees2['age_n'].'</td>
                  <td>'.$donnees2['tel_n'].'</td>
                  <td>'.$donnees2['email_n'].'</td>
                  <td>'.$donnees2['experience_n'].'</td>
                  <td>'.$donnees2['presentation_n'].'</td>
                  <td> <input type="radio" name="select'.$compteur.'"> </td>
                  <tr/>';

            echo  '<input type="text" name="hd'.$compteur.'"  value="'.$donnees2['hd_dispo'].'"  />';
            echo  '<input type="text" name="hf'.$compteur.'"  value="'.$donnees2['hf_dispo'].'"  />';
            echo  '<input type="text" name="id_n'.$compteur.'"  value="'.$donnees2['id_nounou_dispo'].'"  />';


$compteur=$compteur+1;

        }

        echo '</table>';

        echo  '<input type="text" name="date"  value="'.$date.'" />';


    ?>


