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


//  Récupération de l'utilisateur et de son pass hashé

$req = $bdd->query('SELECT identifiant_n, mdp_n,valide_n FROM nounou WHERE identifiant_n = \''.$_POST['identifiant'].'\'');

$resultat = $req->fetch();


$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp_n']);

$valide = $resultat['valide_n'];


    if ($valide == 0)
    {
        echo 'Votre profil n\'a pas encore été validé par l\'administrateur <br/> Encore un peu de patience';
    }
    else
    {

        if (!$resultat)
            {
                echo '1 Mauvais identifiant ou mot de passe !';
            }
        else
            {
                if ($isPasswordCorrect)
                    {

                        session_start();
                        $_SESSION['identifiant'] = $resultat['identifiant_p'];

                        echo 'Vous êtes connecté !';
                    }
                else
                {
                    echo '2 Mauvais identifiant ou mot de passe !';
                }
            }
    }

$req->closeCursor();

?>
</body>
</html>

