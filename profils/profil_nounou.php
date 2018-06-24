<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VOTRE PROFIL NOUNOU</title>
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


echo 'Mes gardes à venir : <br>';


$req = $bdd->query('SELECT g.heure_deb_g,g.heure_fin_g,g.date_g,e1.prenom_e,e2.prenom_e
                              FROM Garde AS g, enfant AS e1,enfant as e2, Nounou AS n
                              WHERE n.id_n="'.$_SESSION['id'].'" AND g.id_enfant1=e1.id_e AND g.id_enfant2=e2.id_e');




//                        $req2 = $bdd->query('SELECT g.heure_deb_g,g.heure_fin_g,g.date_g,e1.prenom_e,
//                              FROM Garde AS g, enfant AS e1, Nounou AS n
//                              WHERE n.id_n="'.$_SESSION['id'].'" AND g.id_enfant2=e1.id_e');
//
//
//
//                        $resultat2 = $req2->fetch();


echo
'<table>
                <tr>
               <th>Date</th>
               <th>Heure début</th>
               <th>Heure fin</th>
               <th>Enfant 1</th>
               <th>Enfant 2</th>
               <tr>';



while ($resultat = $req->fetch())

{
    echo '<tr>

                                 <td>'.$resultat['date_g'].'</td>'.
        '<td>'.$resultat['heure_deb_g'].'</td>'.
        '<td>'.$resultat['heure_fin_g'].'</td>'.
        '<td>'.$resultat['prenom_e'].'</td>
                                 <td>'.$resultat['prenom_e'].'</td></tr>';
}
echo'</table></br>';

?>

<a href="../garde/formulaire_creneau_nounou.php"> Ajouter des créneaux de disponibilité</a>

</body>
</html>
