<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>CONNEXION NOUNOU</title>
</head>



<body>
<form method="post" action="../profils/profil_nounou_post.php">
    <fieldset>
        <p>
            <label for="identifiant">Identifiant :</label><input type="text" name="identifiant" id="identifiant" placeholder="Choisissez un identifiant..." required/>
        </p>

        <p>
            <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" placeholder=" mot de passe..." required>
        </p>

    </fieldset>
    <p>
        <input type="submit" value="Envoyer" />
    </p>


</form>
</body>


</html>