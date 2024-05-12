<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/IndexStyle.css">
    <link rel="stylesheet" href="../Css/Projets.css">
    <title>My Project</title>
</head>
<body>
    <header>
        <div class="main_title">
            <img src="../Images/bitmoji.png" height="110" alt="my_caricature ">
            <div>
            <h1>Brouwers Léa</h1>
            <h2>My Project</h2>
            </div>
        </div>
        <nav class="navigation_menu">
            <ul>
                <li><a href="../Index.html">But de l’unité programmation</a></li>
                <li class="deroulement"><a href="./HauteEcoleCondorcet.html">Haute Ecole Condorcet</a>
                    <div class="onglets">
                        <a href="./HauteEcoleCondorcet.html#HepCond">Heph Condorcet</a>
                        <a href="./HauteEcoleCondorcet.html#SecEbus">Section e-business</a>
                    </div>
                </li>
                <li class="deroulement"><a href="#">Calculs et affectations</a>
                    <div class="onglets">
                        <a href="#">Rectangle</a>
                        <a href="./Tva.html">TVA</a>
                    </div>
                </li>
                <li class="deroulement"><a href="./StructuresConditionnelles.html">Structures conditionnelles</a>
                    <div class="onglets">
                        <a href="./StructuresConditionnelles.html#"Cerc>Cercle</a>
                        <a href="./StructuresConditionnelles.html#FonctQuad">Fonction quadratique</a>
                        <a href="./StructuresConditionnelles.html#Calc">Calculette</a>
                        <a href="./StructuresConditionnelles.html#Civi">Civilité</a>
                        <a href="./StructuresConditionnelles.html#DaLong">Date Longue</a>
                    </div>
                </li>
                <li><a href="./StructuresRépétitivesEtFonctions.html">Structures répétitives et fonctions</a></li>
                <li><a href="./Tableaux.html">Tableaux</a></li>
                <li class="deroulement"><a href="./FinApprentissage.html">Fin d’apprentissage </a>
                    <div class="onglets">
                        <a href="./FinApprentissage.html#Aldrin">Aldrin</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="Rect">
        <article>
            <h1>Projet Rectangle</h1>
        <div><img src="../Images/Rect1.png" alt="Rect1" width="100%"></div>
        <div><img src="../Images/Rect2.png" alt="Rect2" width="100%"></div>
        <div><img src="../Images/Rect3.png" alt="Rect3" width="100%"></div>
        <p>La longueur et la largeur d’un rectangle doivent-être une valeur positive ou nulle.</p> <br>
        <p>La longueur doit-être supérieure ou égale à la largeur sinon la figure géométrique n’est pas un quadrilatère rectangle.</p> <br>
        <p>Lorsque la longueur du rectangle correspond à sa largeur, le rectangle est alors un carré</p> <br>
    </article>
        <h2>Vous voulez connaitre le périmetre et la surface d'un rectangle ? Alors, utilisez le formulaire ci-dessous !!!</h2>
        <p>Résultats :</p> 

    <?php
        
        // Récupération des données envoyées via la méthode POST
        $longueur = $_POST["longueur"]; // Stockage de la longueur saisie dans la variable $longueur
        $largeur = $_POST["largeur"]; // Stockage de la largeur saisie dans la variable $largeur

        // Calcul du périmetre et de la surface
        $perimetre = 2 * ($longueur + $largeur); // Calcul du périmètre en doublant la somme de la longueur et de la largeur
        $surface = $longueur * $largeur; // Calcul de la surface en multipliant la longueur par la largeur
        echo ("<p> Périmètre : $perimetre <br> Surface : $surface </p>"); // Affichage du résultat du périmetre et de la surface

    ?>
      <form action="scriptRectangle.php" method="post"> <!-- Formulaire envoyant les données vers scriptRectangle.php avec la méthode POST -->
    <label>Longueur : </label><input type="text" name="longueur"> <!-- Étiquette pour le champ de saisie de la longueur du rectangle + Champ de saisie pour la longueur du rectangle -->
    <label>Largeur :  </label><input type="text" name="largeur"> <!--  Étiquette pour le champ de saisie de la largeur du rectangle + Champ de saisie pour la largeur du rectangle -->
    <input type="submit" value="Calcul"> <!-- Bouton de soumission du formulaire avec le texte "Calcule" -->
</form>  
    </section>  
</body>
</html>
