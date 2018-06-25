<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="profil_parent.css" rel="stylesheet">
    <title>ACCUEIL PARENT | Les Bambins</title>
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




?>



<a href="../formulaires/formulaire_ajout_enfant.php">Ajouter un Enfant </a> <br>

<a href="../garde/formulaire_recherche_garde.php"> Faire garder mes enfants</a>


<script src="retourhaut.js"></script>


</body>
</html>
