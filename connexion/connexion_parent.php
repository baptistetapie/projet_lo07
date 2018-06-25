<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>CONNEXION PARENTS</title>
    <link rel="stylesheet" href="../CSS/connexion.css" />
</head>
    <body>
        <form method="post" action="../profils/profil_parent_post.php">
            <fieldset>
            <p>
                <label for="identifiant">Identifiant :</label><input type="text" name="identifiant" id="identifiant" placeholder="Choisissez un identifiant..." required/>
            </p>

            <p>
                <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" placeholder="Choisissez un mot de passe..." class="mdp" required>
            </p>



            </fieldset>
            <p>
                <input type="submit" value="Envoyer" />
            </p>


        </form>
    </body>


</html>
