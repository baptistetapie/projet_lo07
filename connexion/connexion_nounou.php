<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion nounou | Les Bambins</title>
    <link rel="stylesheet" href="connexion.css" />
</head>

<body>
<form method="post" action="../profils/profil_nounou_post.php">
    
    <header>
        <nav id="nav"> 
           <ul> <li><a href="accueil.php" title="Les Bambins"><img src="https://naitreetgrandir.com/DocumentsNG/Fiches/images/bg-naitre-grandir-bienfaits-dessin-3-a-5-ans-1.Jpeg" alt="logo" width="100px"></a></li>
               <li> <h1>Connexion à votre compte NOUNOU</h1></li>
           </ul>
       </nav>
        </header>
    
      
    <div>
        <p id="saisie">
            <label for="identifiant">Identifiant :</label><input type="text" name="identifiant" id="identifiant" placeholder="Saisissez votre identifiant..." required/>
        </p>

        <p id="saisie">
            <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" placeholder="Saisissez votre mot de passe..." required>
        </p>

        <p>
            <input type="submit" value="Envoyer" />
        </p>

    </div>

    
</form>
</body>


</html>
