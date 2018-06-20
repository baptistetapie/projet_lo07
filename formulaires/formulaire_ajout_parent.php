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
        <link rel="stylesheet" href="../CSS/formulaire_parent.css" />
            
    </head>
    <body>
        <a name="haut" id="haut"></a>
        
        <header>
        <nav id="nav"> 
           <ul> <li><a href="../accueil/accueil.php" title="Les Bambins"><img src="https://naitreetgrandir.com/DocumentsNG/Fiches/images/bg-naitre-grandir-bienfaits-dessin-3-a-5-ans-1.Jpeg" alt="logo" width="100px"></a></li>
               <li> <h2>FORMULAIRE D'INSCRIPTION DES PARENTS</h2></li>
           </ul>
       </nav>
        </header>
      
        <form name="ajout_parent" method='post' action='../accueil/accueil_parent.php' >
        <div>
            <p>
                <label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom" placeholder="Votre prénom..." required/>
            </p>
            
            <p>
                <label for="nom">Nom :</label><input type="text" name="nom" id="nom" placeholder="Votre nom..." required />
            </p>

            <fieldset>
            <p>
                <label for="identifiant">Identifiant :</label><input type="text" name="identifiant" id="identifiant" placeholder="Choisissez un identifiant..." required>
            </p>

            <p>
                <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" placeholder="Choisissez un mot de passe..." required>
            </p>

            <p>
                <label for="mdp2">Confirmez mot de passe :</label><input type="password" name="mdp2" id="mdp2" placeholder="Confirmation" onblur="verifMdp2(this)" required>
            </p>
            </fieldset>
            <p>
                <label for="ville">Ville :</label><input type="text" name="ville" id="ville" placeholder="Votre adresse..."  required />
            </p>
            
            <p>
                <label for="email">Mail :</label><input type="email" name="email" id="email" placeholder="Votre email..." required />
            </p>
            
            <p>
                <label for="tel">Téléphone :</label><input type="tel" name="tel" id="tel" placeholder="Votre numéro de téléphone..."  required />
            </p>

            <p>
                <textarea name="infos" id="infos" placeholder="Indiquez toutes informations qui vous semblent importantes" cols="80" rows="4" required></textarea>
            </p>




            <p>
                <input type="submit" value="Envoyer" />
            </p>   
        
        </div>
        </form> 
            
        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
        
        <script src="../JavaScript/retourhaut.js"></script>

        <script src="../JavaScript/confirmation_mdp.js"></script>




    </body>
</html>
