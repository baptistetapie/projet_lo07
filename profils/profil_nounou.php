<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../CSS/profil_nounou.css" rel="stylesheet">
    <title>VOTRE PROFIL NOUNOU</title>
</head>
<body>
<a name="haut" id="haut"></a>

<header>
        <nav id="nav"> 
           <ul> <li><a href="accueil.php" title="Les Bambins"><img src="https://naitreetgrandir.com/DocumentsNG/Fiches/images/bg-naitre-grandir-bienfaits-dessin-3-a-5-ans-1.Jpeg" alt="logo" width="100px"></a></li>
               <li> <h1>Votre profil NOUNOU</h1></li>
           </ul>
       </nav>
</header>
    
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


echo 'Gardes  : <br>';


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

<a class="ajout" href="../garde/formulaire_creneau_nounou.php"> Ajouter des créneaux de disponibilité</a>


<script src="retourhaut.js"></script>
</body>
</html>
