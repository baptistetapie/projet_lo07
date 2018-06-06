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

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->prepare('SELECT * FROM parent WHERE ville_p = ?');
$reponse->execute(array($_POST['ville']))

// On affiche chaque entrée une à une

?>

Les parents qui habitent à <?php echo $_POST['ville'];?> sont :
<?php
while ($donnees = $reponse->fetch())
{
?>
<p>
    le parent n° <?php echo $donnees['id_p'] ; ?> est : <?php echo $donnees['nom_p']; }?>
</p>

<?php


$reponse->closeCursor(); // Termine le traitement de la requête

?>