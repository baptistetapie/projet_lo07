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

//echo $_POST['nom'] ;

echo ('Les Enfants de Monsieur et Madame ' . $_POST['nom'] .' s\'appellent <br/>') ;

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT prenom_e FROM Enfant AS e, Parent AS  p WHERE p.nom_p = \'' . $_POST['nom'] . '\' ');


// On affiche chaque entrée une à une

while ($donnees=$reponse->fetch())
{
    echo ($donnees['prenom_e'] . '<br/>') ;
}

?>


<!--Les parents qui habitent à --><?php //echo $_POST['ville'];?><!-- sont :-->
<?php
//while ($donnees = $reponse->fetch())
//{
//?>
<!--<p>-->
<!--    le parent n° --><?php //echo $donnees['id_p'] ; ?><!-- est : --><?php //echo $donnees['nom_p']; }?>
<!--</p>-->
<!---->
<?php


$reponse->closeCursor(); // Termine le traitement de la requête

?>