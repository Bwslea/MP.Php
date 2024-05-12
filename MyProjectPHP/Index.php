<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Project </title>
    <link rel="stylesheet" href="Css/IndexStyle.css">
</head>
<body>
<div id="Block">
    <header>
        <div class="main_title">
            <img src="./Images/Logo-eCampus-Condorcet.webp" height="110" alt="condorcet">
            <div>
            <h1>My Project</h1>
            <h2>Brouwers Léa</h2>
            </div>
        </div>
        <nav class="navigation_menu">
            <ul>
                <li><a href="#">But de l’unité programmation</a></li>
                <li class="deroulement"><a href="./Pages/HauteEcoleCondorcet.html">Haute Ecole Condorcet</a>
                    <div class="onglets">
                        <a href="./Pages/HauteEcoleCondorcet.html#HepCond">Heph Condorcet</a>
                        <a href="./Pages/HauteEcoleCondorcet.html#SecEbus">Section e-business</a>
                    </div>
                </li>
                <li class="deroulement"><a href="#">Calculs et affectations</a>
                    <div class="onglets">
                        <a href="./Pages/Rectangle.html">Rectangle</a>
                        <a href="./Pages/Tva.html">TVA</a>
                    </div>
                </li>
                <li class="deroulement"><a href="./Pages/StructuresConditionnelles.html">Structures conditionnelles</a>
                    <div class="onglets">
                        <a href="./Pages/StructuresConditionnelles.html#"Cerc>Cercle</a>
                        <a href="./Pages/StructuresConditionnelles.html#FonctQuad">Fonction quadratique</a>
                        <a href="./Pages/StructuresConditionnelles.html#Calc">Calculette</a>
                        <a href="./Pages/StructuresConditionnelles.html#Civi">Civilité</a>
                        <a href="./Pages/StructuresConditionnelles.html#DaLong">Date Longue</a>
                    </div>
                </li>
                <li><a href="./Pages/StructuresRépétitivesEtFonctions.html">Structures répétitives et fonctions</a></li>
                <li><a href="./Pages/Tableaux.html">Tableaux</a></li>
                <li class="deroulement"><a href="./Pages/FinApprentissage.html">Fin d’apprentissage </a>
                    <div class="onglets">
                        <a href="./Pages/FinApprentissage.html#Aldrin">Aldrin</a>
                    </div>
                </li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="banner">
        <h2 class="titreImage">Découvrir la programmation pour rendre un site plus interactif </h2>
        <div class="description_banner"></div>  
        
        <button id="myBtn">
            <img class="red_button" src="./Images/variante-fleche.png" alt="flècheWilliam">
            Pourquoi avoir créé ce site ? </button>
    <!-- Boite Modale -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close"> &times; </span>
            <!-- &times; = entité html -->
            <p>J'ai mis en place ce site dans le cadre de mon cours de création de site web, avec pour objectif de mettre en pratique les compétences que j'ai acquises et de partager des informations pertinentes avec vous, visiteurs. L'ambition ici est de vous offrir un espace en ligne où vous pourrez trouver des ressources, des articles intéressants, et peut-être même découvrir de nouvelles idées.</p>
            <p>Que vous soyez ici par curiosité, par intérêt personnel, ou que vous cherchiez des informations spécifiques, j'espère que votre visite sera agréable et instructive.</p>
            <p>N'hésitez pas à explorer les différentes sections du site et à me faire part de vos commentaires. Votre retour est essentiel pour m'aider à améliorer continuellement cette plateforme.</p>
            <p>Merci de m'accompagner dans cette aventure en ligne !</p>
        </div>
    </div>
    <script>
        // lire la boite modale 
        var modal=document.getElementById("myModal");
        // lire le bouton pr ouvrir la boite moale
        var btn=document.getElementById("myBtn");
        // lire l'element <span> qui permettra de fermer la boite modale
        var span=document.getElementsByClassName("close")[0];
        // lorsque l'utilisateur clique sur le bouton 
        btn.onclick = function () {
            modal.style.display = "block"
        }
        // lorsque l'utilisateur clique sur le "bouton fermer"       
        span.onclick = function() {
            modal.style.display = "none";
        }
        // lorsque l'utilisateur clique en dehors de la boite modale et pour permettre de la fermer
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </div> 
    
    <section>
        <article>
            <h2>Le rôle de l’unité « programmation »</h2>
            <p>Obtenir d'une machine (ordinateur, calculatrice, robot,...) qu'elle fasse certaines taches à notre place.</p>
            <h2>Travail demandé dans le cadre de cet apprentissage</h2>
            <p>Lire et surtoutcomprendre le problème <br>
                Analyser le problème <br>
                En déduire un algorithme <br>
                Tester l’algorithme <br>
                Traduire cet algorithme dans un langage de programmation <br>
                Tester le programme</p>
            <h2>Notions d’analyse, d’algorithme</h2>
            <h3>Mais qu’est-ce un algorithme</h3>
            <p>" Un algorithme peut être défini come étant une suite finie de règles à appliquer dans un ordre déterminé à un nombre fini de données pour arriver, en un nombre fini d'étapes, à un certain résultat, et cela indépendamment des données. "</p>
            <h3>OU</h3>
            <p>" Un algorithme peut aussi être défini comme étant une suite organisée d’opérations élémentaires effectuables par l’ordinateur
                pour résoudre un problème ou une classe de problèmes "</p>
            <h2>Représentations algorithmiques avec exemples</h2>
            <h3>Représentation graphique : Ordinogramme</h3>
            <img src="./Images/ordi.png" alt="Ordinogramme" width="60%">
            <h3>Représentation sous forme de texte : Langage de Description Algorithmique (LDA)</h3>
            <img src="./Images/lda.png" alt="LDA" width="70%">
            <h2>Langages JS et PHP, leurs différences avec schémas</h2>
            <p>Le JavaScript est un langage « CLIENT-SIDE » ->Exécuté par le navigateur chez l’internaute </p>
            <img src="./Images/Js.png" alt="JS" width="80%">
            <p>Le PHP est un langage « SERVER-SIDE » -> Exécuté par le serveur WEB</p>
            <img src="./Images/Php.png" alt="Php" width="80%">
        </article>
        <aside>
            <h1>Qui suis-je ? </h1>
            <div class="gauche">
            <img id="my_picture" src="Images/maphoto.jpg" alt="">
            <div class="ppp">
            <p>Bonjour, je me prénome Léa Brouwers.</p>
            <p>Ayant commencé un bachelier en E-Business, <br> je réalise ce site "sur les traces de Vauban".</p>
            <p>Ce projet est ma deuxième création de site web.</p>
            <p>Je vais donc essayer de représenter l'avancement de mes connaissances en code.</p>
            </div>
            </div>
        </aside>
    </section>
</body>
</html>
