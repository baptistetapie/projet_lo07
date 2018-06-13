<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription nounous | Les Bambins</title>
        <link rel="stylesheet" href="formulaire_nounou.css" />
       
    </head>
    <body>
        <a name="haut" id="haut"></a>
        
        <header>
        <nav id="nav"> 
           <ul> <li><a href="accueil.php" title="Les Bambins"><img src="https://naitreetgrandir.com/DocumentsNG/Fiches/images/bg-naitre-grandir-bienfaits-dessin-3-a-5-ans-1.Jpeg" alt="logo" width="100px"></a></li>
               <li> <h2>FORMULAIRE D'INSCRIPTION DES NOUNOUS</h2></li>
           </ul>
       </nav>
        </header>
      
        <form name="ajout_nounou" method='post' action='apres_soumission_nounou.php' >
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
<<<<<<< HEAD
                <label for="tel">Téléphone</label> : <input type="tel" name="tel" id="tel" />
=======
                <label for="mail">Mail :</label><input type="email" name="mail" id="mail" placeholder="Votre email..." required />
>>>>>>> 8914aebe1ec376080f312f302c9b9db13615f94b
            </p>

            <p>
<<<<<<< HEAD
                <label for="email">Email</label> : <input type="email" name="email" id="email"  />
=======
                <label for="tel">TÃ©lÃ©phone portable :</label><input type="tel" name="tel" id="tel" placeholder="Votre numéro de téléphone..."  required />
>>>>>>> 8914aebe1ec376080f312f302c9b9db13615f94b
            </p>

            <p>
                <label for="age">Age</label> : <input type="number" name="age" id="age" />
            </p>

            <p>
            <fieldset>
                <legend>Veuillez sélectionner les langues que vous parlez </legend>
                <div>
                    <input type="checkbox" id="francais" name="langue" value="français">
                    <label for="francais">français</label>
                </div>
                <div>
                    <input type="checkbox" id="anglais" name="langue" value="anglais">
                    <label for="anglais">anglais</label>
                </div>
                <div>
                    <input type="checkbox" id="allemand" name="langue" value="allemand">
                    <label for="allemand">allemand</label>
                </div>
                <div>
                    <input type="checkbox" id="espagnol" name="langue" value="espagnol">
                    <label for="espagnol">espagnol</label>
                </div>
            </fieldset>
            </p>
            <p>
            Quel est votre niveau de compétences ? <br/>

                <select name="experience">
                    <option value="débutant(e)">Débutant(e)</option>
                    <option value="confirmé(e)">Confirmé(e)</option>
                </select>
            </p>

            <p>
                <label for="ville">Age :</label><input type="number" name="age" id="ville" placeholder="Votre age..."  required />
            </p>
            
            <p>
                <label for="langue">Langue(s) parlées :</label><input type="text" name="langue" id="langue"/>
            </p>
            
            <p>
                <label for="ville">Présentation :</label></p><p><textarea name="presentation" id="presentation" placeholder="Présentez-vous en quelques mots..." cols="80" rows="4" required></textarea>
            </p>
            
            <p>
                <label for="identifiant">Identifiant :</label><input type="text" name="identifiant" id="identifiant" placeholder="Choisissez un identifiant..." required/>
            </p>
            
            <p>
                <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" placeholder="Choisissez un mot de passe..." required>
            </p>
            
            <label for="expe">Expérience :</label>
            <p>
            <ul class="experience">

  <input type="radio" id="5-exp" name="exp" value="5" /><label for="5-exp" title="Professionnelle">5</label>

  <input type="radio" id="4-exp" name="exp" value="4" /><label for="4-exp" title="Très habituée">4</label>

  <input type="radio" id="3-exp" name="exp" value="3" /><label for="3-exp" title="Régulièrement">3</label>

  <input type="radio" id="2-exp" name="exp" value="2" /><label for="2-exp" title="Occasionnellement">2</label>

  <input type="radio" id="1-exp" name="exp" value="1" /><label for="1-exp" title="Première expérience">1</label>
            </ul>
            </p>
            
            <p>
                <input type="submit" value="Envoyer" />
            </p>   
        
            <p>
                Formulaire d'envoi de fichier :<br />
                
                <input type="file" name="monfichier" /><br />
                
            </p>
            
        </div>
        </form> 
            
        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
        
        <script src="retourhaut.js"></script>
        <script src="langue_auto.js"></script>
        
    </body>
</html>
            
            
