
    <?php

     $heure = date("H");

    if($heure<19)
    {
        echo "Bonjour " .  $_POST['prenom'] ."<br/>";
    }
    else
    {
        echo "Bonsoir " . $_POST['prenom']."<br/>" ;
    }

    ?>

    Merci pour ton inscription ! <br/>

    Nous reviendrons vers toi une fois ton profil validé par notre administrateur

    <?php

    echo $_POST[]
    ?>

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

    //Commande insertion sql


    $bdd->exec('INSERT INTO nounou(prenom_n,nom_n,ville_n,tel_n,email_n, age_n,experience_n,presentation_n) 
                      
                      VALUES ("'.$prenom.'","'.$nom.'","'.$ville.'","'.$tel.'","'.$email.'","'.$age.'","'.$experience.'","'.$presentation.'")');




    $reponse->closeCursor(); // Termine le traitement de la requête


    ?>