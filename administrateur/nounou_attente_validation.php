<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NOUNOU ATTENTE VALIDATION </title>
    <link rel="stylesheet" href="../CSS/validation_nounou.css" />
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


$req = $bdd->query('SELECT * FROM nounou WHERE valide_n=0');





?>

<form name="valider_nounou" method="post" action="../administrateur/valider_nounou.php" enctype="multipart/form-data" >

    <?php

    $compteur = 0;

while ($donnees = $req->fetch())
        {

            echo  '<input type="text" name="idtemp'.$compteur.'"  value="'.$donnees['identifiant_n'].'" hidden />';


            echo
            '<table>
                <tr>
               <th>prénom</th>
               <th>nom</th>
               <th>ville</th>
               <th>tel</th>
               <th>email</th>
            <th>age</th>
            <th>experience</th>
             <th>presentation</th>
             <th>Validation<th/>
             <tr/>';

            echo '<tr>
              <td>'.$donnees['prenom_n'].'</td>'.
             '<td>'.$donnees['nom_n'].'</td>'.
             '<td>'.$donnees['ville_n'].'</td>'.
             '<td>'.$donnees['tel_n'].'</td>'.
             '<td>'.$donnees['email_n'].'</td>'.
             '<td>'.$donnees['age_n'].'</td>'.
             '<td>'.$donnees['experience_n'].'</td>'.
             '<td>'.$donnees['presentation_n'].'</td>'.

            '<td> <select name="valider'.$compteur.'">
                    <option value="1">ACCEPTER</option>
                    <option value="0">REFUSER</option>
                  </select>
             </td>
             <tr/></table>'. '<br/><br/>';

    $compteur=$compteur+1;

         }



echo '      <p>
                <input type="submit" value="Valider" />
            </p>';

    echo  '<input type="text" name="compteur" id="compteur" value="'.$compteur.'" hidden/></form>';







?>



</body>
</html>











