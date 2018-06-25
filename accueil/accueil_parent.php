<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACCUEIL PARENTS</title>
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


            //test id unique

$req = $bdd->query('SELECT identifiant_p FROM parent WHERE identifiant_p = \''.$_POST['identifiant'].'\'');

$count = $req -> rowCount() ;



if($count==1)
    {
        echo('Identifiant déjà existant, <a href="../formulaires/formulaire_ajout_parent.php"> Retour au formulaire </a>') ;
    }
else
{

        $heure = date("H");

        if ($heure < 19) {
            echo "Bonjour " . $_POST['prenom'] . "<br/>";
        } else {
            echo "Bonsoir " . $_POST['prenom'] . "<br/>";
        }


        echo('Merci pour votre inscription ! <br/>
    <a href="../connexion/connexion_parent.php">Connectez vous dès à présent</a> <br/> ');


    //     PARTIE REMPLISSAGE BDD


    //INSERTION BDD

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $ville = $_POST['ville'];
        $tel = $_POST['tel'];
        $infos = $_POST['infos'];
        $identifiant = $_POST['identifiant'];

        $hash = password_hash($_POST['mdp'], PASSWORD_BCRYPT);


    //Commande insertion sql


        $bdd->exec('INSERT INTO parent(prenom_p,nom_p,ville_p,email_p,tel_p, infos_p, identifiant_p,mdp_p)

                          VALUES ("' . $prenom . '","' . $nom . '","' . $ville . '","' . $email . '","' . $tel . '","' . $infos . '","' . $identifiant . '","' . $hash . '")');

}




$reponse->closeCursor(); // Termine le traitement de la requête

?>

</body>
</html>
