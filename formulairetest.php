<form method="post" action="insertparent.php">
    <p>
        <label for="nom">Nom : </label> <input type="text" name="nom" id="nom">
    </p>

    <p>
        <label for="ville">Ville : </label> <input type="text" name="ville" id="ville">
    </p>

    <p>
    <label for="email"> Email : </label> <input type="email" name="email" id="email">
    </p>

    <p>
        <label for ="organisation"> Détails organisation :</label> <textarea rows="4" cols="25" id="organisation" nom="organisation">Votre organisation ici</textarea>

    </p>
    <input type="submit" name="envoyer">
</form>