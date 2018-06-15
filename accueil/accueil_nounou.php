
    <?php

     $heure = date("H");

    if($heure<19)
    {
        echo "Bonjour " .  $_POST['prenom'] .",<br/>";
    }
    else
    {
        echo "Bonsoir " . $_POST['prenom'].",<br/>" ;
    }

    ?>

    Merci pour ton inscription ! <br/>

    Nous reviendrons vers toi une fois ton profil validé par notre administrateur




<!--    PARTIE REMPLISSAGE BDD   -->


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


    //variables de transfert

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $ville = $_POST['ville'];
    $tel = $_POST['tel'];
    $email =$_POST['email'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $presentation = $_POST['presentation'];
    $identifiant=$_POST['identifiant'];

    $hash = password_hash($_POST['mdp'],PASSWORD_BCRYPT);
    //Commande insertion sql


    $bdd->exec('INSERT INTO nounou(prenom_n,nom_n,ville_n,tel_n,email_n, age_n,experience_n,presentation_n,identifiant_n,mdp_n) 
                      
                      VALUES ("'.$prenom.'","'.$nom.'","'.$ville.'","'.$tel.'","'.$email.'","'.$age.'","'.$experience.'","'.$presentation.'","'.$identifiant.'","'.$hash.'")');




    $reponse->closeCursor(); // Termine le traitement de la requête




//    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
//    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
//    {
//        // Testons si le fichier n'est pas trop gros
//        if ($_FILES['monfichier']['size'] <= 5000000)
//        {
//            // Testons si l'extension est autorisée
//            $infosfichier = pathinfo($_FILES['monfichier']['name']);
//            $extension_upload = $infosfichier['extension'];
//            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
//            if (in_array($extension_upload, $extensions_autorisees))
//            {
//                // On peut valider le fichier et le stocker définitivement
//                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
//                echo "L'envoi a bien été effectué !";
//            }
//        }
//    }


    ?>