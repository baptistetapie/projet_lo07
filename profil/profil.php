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

$req = $bdd->query('SELECT identifiant_p, mdp_p FROM parent WHERE identifiant_p = \''.$_POST['identifiant'].'\'');

$resultat = $req->fetch();


$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp_p']);


if (!$resultat)
{
    echo '1 Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {

        session_start();
        $_SESSION['identifiant'] = $resultat['identifiant_p'];

        echo 'Vous êtes connecté !';
    }
    else {
        echo '2 Mauvais identifiant ou mot de passe !';
    }
}

$req->closeCursor();

?>

