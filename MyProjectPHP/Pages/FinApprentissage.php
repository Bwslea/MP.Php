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
                        <a href="./Rectangle.html">Rectangle</a>
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
                <li class="deroulement"><a href="#">Fin d’apprentissage </a>
                    <div class="onglets">
                        <a href="#Aldrin">Aldrin</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="Aldrin">
         <?php
    function isAldrin($x){
        $som = 0;
        $nbr = $x;
        while($nbr > 0){
            $chiffre = $nbr % 10;
            $som += $chiffre * $chiffre * $chiffre;
            $nbr =(int)($nbr / 10);
        }
        return $som == $x;
    }
    // y = tous les nombres d'aldrin trouves apres calcul
    function ecrireNombresAldrin($x){
      // Affichage
      echo "<table border='1'>";
      echo "<tr><th>Number</th></tr>";
      foreach($x as $value){
          echo "<tr><td>".$value."</td></tr>";
      }
      echo "</table>";
    }
    $resultats = array();
    if(isset($_POST['number'])){
      $nbrencode = $_POST['number'];
        for($i = 1; $i <= $nbrencode; $i++){
            if(isAldrin($i)){
                $resultats[] = $i;
            }
        }  
      ecrireNombresAldrin($resultats);
    }
  ?>
        <h1>Projet Aldrin</h1>
        <p></p>
        <p></p> <br>
        <hr> <br>
        <form class="formulaire" method="POST">
        <input type="text" id="number" name="number" placeholder="Enter a number">
        <button type="Calculer" name="Calculer">Calculer</button>
        </form>
    </section>
</body>
</html>
