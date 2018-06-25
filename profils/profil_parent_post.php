<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="profil_parent.css" rel="stylesheet">
    <title>VOTRE PROFIL PARENT</title>
</head>
<body>

<?php

//connexion BDD

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


//  Récupération de l'utilisateur et de son pass hashé

$req = $bdd->query('SELECT id_p, prenom_p,identifiant_p, mdp_p,ville_p FROM parent WHERE identifiant_p = \''.$_POST['identifiant'].'\'');

$resultat = $req->fetch();


$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp_p']);


if (!$resultat)
{
    echo ' Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {


        $_SESSION['id'] = $resultat['id_p'];
        $_SESSION['prenom']= $resultat['prenom_p'];
        $_SESSION['ville']=$resultat['ville_p'];

        echo 'Bonjour '.$_SESSION['prenom'].'<br><br>';

echo 'Gardes : <br>';


$req = $bdd->query('SELECT g.heure_deb_g,g.heure_fin_g,g.date_g,n.prenom_n FROM Garde AS g, parent AS p,Nounou AS n 
                              WHERE p.id_p="'.$_SESSION['id'].'" AND n.id_n=g.nounou_g');


echo
'<table>
                <tr>
               <th>Date</th>
               <th>Heure début</th>
               <th>Heure fin</th>
               <th>Nounou</th>
               <tr>';



while ($resultat = $req->fetch())

{
    echo '<tr>
              <td>'.$resultat['date_g'].'</td>'.
        '<td>'.$resultat['heure_deb_g'].'</td>'.
        '<td>'.$resultat['heure_fin_g'].'</td>'.
        '<td>'.$resultat['prenom_n'].'</td></tr>';
}
echo'</table></br>';






        echo ('<a class="ajout" href="../formulaires/formulaire_ajout_enfant.php">Ajouter un Enfant </a> <br/>

<a class="ajout" href="../garde/formulaire_recherche_garde.php"> Faire garder mes enfants</a>');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !<br> <br>';
    }
}
$req->closeCursor();


?>


</body>
</html>


