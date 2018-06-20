<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil | Les Bambins</title>
        <link rel="stylesheet" href="accueil.css"/>
    </head>
    <body>
        
        <a name="haut" id="haut"></a>
        
        <header>
        <nav id="nav"> 
           <ul> <li><a href="accueil.php" title="Les Bambins"><img src="https://naitreetgrandir.com/DocumentsNG/Fiches/images/bg-naitre-grandir-bienfaits-dessin-3-a-5-ans-1.Jpeg" alt="logo" width="100px"></a></li>
               <li> <h1>BIENVENUE SUR LE SITE DES BAMBINS</h1></li>
               <li> <h2>Baby-sitting, garde d'enfant, entraide !</h2>
           </ul>
       </nav>
        </header>
        
       
        <div class="navbar">
          <a href="formulaire_ajout_nounou.php">Inscription nounou</a>
          <a href="formulaire_ajout_parent.php">Inscription parent</a>
        </div>
        
        <div class="row">
            <div class="side">
                <h3>Nos services</h3>
                <h4>Baby-sitting:</h4>
                <p>Description</p>
                <h4>Langue:</h4>
                <p>Description</p>
                <h4>Sortie d'école:</h4>
                <p>Description</p>
            </div>
                
            <div class="main">
                <h3>Présentation</h3>
                <p>
                Vous aimez vos enfants, mais avec le travail, vos activités ou vos soirées, vous n'avez pas forcément tout le temps nécessaire à leur 
                consacrer. Nous sommes la pour vous aider et nous occuper de vos enfants quand vous ne pouvez pas. Notre offre est adaptée sur mesure 
                à vos besoins : nous vous proposons des baby-sitters, lorsque qu'une soirée improvisée s'organise et que vous ne pouvez pas amener
                vos bambins avec vous. Nos nounous peuvent également assurer des gardes ponctuelles, comme les sorties d'école les soirs de semaine.
                Enfin, une partie de nos nounous parlent étranger et peuvent transmettent leurs compétences linguistiques pendant la garde.
                </p>
            </div>
        </div>
                
        <div class="footer">
            <h3>Restons en contact!</h3>
            <p>Teléphone : 0768962414</p>
            <p>Email : lesbambins@utt.fr</p>
            <p>Rue d'Astorg, 15, 75008 Paris</p>
        </div>
        
        
        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            window.onscroll = function(ev) {
            document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
            };
            });
            
            document.addEventListener('DOMContentLoaded', function() {
              var aLiens = document.queryselectorAll('a[href*="#"]');
              for(var i=0, len = aLiens.length; i<len; i++) {
                aLiens[i].onclick = function () {
                  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = this.getAttribute("href").slice(1);
                    if (target.length) {
                      scrollTo(document.getElementById(target).offsetTop, 1000);
                      return false;
                    }
                }
                };
              }
            });
        function scrollTo(element, duration) {
            var e = document.documentElement;
            if(e.scrollTop===0){
                var t = e.scrollTop;
                ++e.scrollTop;
                e = t+1===e.scrollTop--?e:document.body;
            }
            scrollToC(e, e.scrollTop, element, duration);
        }
        function scrollToC(element, from, to, duration) {
            if (duration < 0) return;
            if(typeof from === "object")from=from.offsetTop;
            if(typeof to === "object")to=to.offsetTop;
            scrollToX(element, from, to, 0, 1/duration, 20, easeOutCuaic);
        }
        function scrollToX(element, x1, x2, t, v, step, operacion) {
            if (t < 0 || t > 1 || v <= 0) return;
            element.scrollTop = x1 - (x1-x2)*operacion(t);
            t += v * step;
            setTimeout(function() {
                scrollToX(element, x1, x2, t, v, step, operacion);
            }, step);
        }
           function easeOutCuaic(t){
            t--;
            return t*t*t+1;
        }
        </script>
        
    </body>
</html>
