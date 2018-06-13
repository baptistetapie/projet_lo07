<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription parents | Les Bambins</title>
        <link rel="stylesheet" href="formulaire_parent.css" />
            
    </head>
    <body>
        <a name="haut" id="haut"></a>
        
        <header>
        <nav id="nav"> 
           <ul> <li><a href="accueil.php" title="Les Bambins"><img src="https://naitreetgrandir.com/DocumentsNG/Fiches/images/bg-naitre-grandir-bienfaits-dessin-3-a-5-ans-1.Jpeg" alt="logo" width="100px"></a></li>
               <li> <h2>FORMULAIRE D'INSCRIPTION DES PARENTS</h2></li>
           </ul>
       </nav>
        </header>
      
        <form name="ajout_parent" method='post' action='apres_soumission_parent.php' >
        <div>    
            <p>
                <label for="prenom">PrÃ©nom :</label><input type="text" name="prenom" id="prenom" placeholder="Votre prénom..." required/>
            </p>
            
            <p>
                <label for="nom">Nom :</label><input type="text" name="nom" id="nom" placeholder="Votre nom..." required />
            </p>
            
            <p>
                <label for="ville">Ville :</label><input type="text" name="ville" id="ville" placeholder="Votre adresse..."  required />
            </p>
            
            <p>
                <label for="mail">Mail :</label><input type="email" name="mail" id="mail" placeholder="Votre email..." required />
            </p>
            
            <p>
                <label for="tel">TÃ©lÃ©phone :</label><input type="tel" name="tel" id="tel" placeholder="Votre numéro de téléphone..."  required />
            </p>
            
            <p>
                <label for="identifiant">Identifiant :</label><input type="text" name="identifiant" id="identifiant" placeholder="Choisissez un identifiant..." required>
            </p>
            
            <p>
                <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" placeholder="Choisissez un mot de passe..." required>
            </p>
            
            <p>
                <input type="submit" value="Envoyer" />
            </p>   
        
        </div>
        </form> 
            
        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
        
        <script src="retourhaut.js"></script>
        
        
    </body>
</html>
