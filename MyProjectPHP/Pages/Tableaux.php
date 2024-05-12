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
                <li><a href="#">Tableaux</a></li>
                <li class="deroulement"><a href="./FinApprentissage.html">Fin d’apprentissage </a>
                    <div class="onglets">
                        <a href="./FinApprentissage.html#Aldrin">Aldrin</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="testAchat">
       <?php
    function EcrireRapport($X) {
        $N = count($X);
        $PrixMoyen = array_sum($X) / $N;
      
        echo '<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; background-color:pink;">';
        echo '<tr><th>Magasin</th><th>Prix (€)</th><th>Pourcentage</th></tr>';

        for ($i = 0; $i < $N; $i++) {
            $Prct = $X[$i] / $PrixMoyen * 100;
            echo "<tr><td>Magasin n°" . ($i + 1) . "</td><td>" . $X[$i] . "</td><td>" . number_format($Prct, 2) . "%</td></tr>";
        }
        echo "<tr><td colspan='3'  >Le prix moyen est " . number_format($PrixMoyen, 2) . "€</td></tr>";
        echo '</table>';
    }

    if(isset($_POST['txtListePrix'])) {
        $ListePrix = $_POST['txtListePrix'];
        $Prix = explode(",", $ListePrix);
        EcrireRapport($Prix);
    }
    ?>
        <div class="formulaire">
            <form name="frmTestAchats">
                <label for="frmTestAchats" style="color: rgb(255, 255, 255); font-size: 30px;">Projet Test Achat</label>
                <p>Test-Achats a pour mission de comparer les prix des marchandises sur le territoire belge. Comparons les prix d’une boite de 300g de petits pois vendus dans les différentes entités de Wallonie Picarde.
                    Evivez les prix de cette marchandise afin d'ecrire un rapport contenant, pour chaque magasin visité, le % du prix de la boîte de petits pois par rapport au prix moyen de cette marchandise sur l’ensemble des magasins visités.</p>
                <p>ANALYSE : <br>
                    1.	LIRE LE NOMBRE DE MAGASIN (N)<br>
                    2.	LIRE LE N<br>
                    3.	CALCULER LA SOMME DE N PRIX<br>
                    4.	CALCULER LA MOYENNE DES N PRIX (SOMME/N)<br>
                    5.	CALCULER LES N POURCENTAGES DES PRIX PAR RAPPORT AU PRIX MOYEN<br>
                    6.	ÉCRIRE LES N POURCENTAGE DE CHAQUE MAGASIN
                    </p>
                <br><hr> <br>
        Liste Prix (séparer par des virgules) :
        <br>
        <input type="text" name="txtListePrix">
        <input type="submit" name="btnEgal" value="=">
    </form>
            </div>
            <br>
    </section>
    <section id="extremaN">
    <?php
    function Mini($X) {
    $Mn = $X[0];
    $N = count($X);
    for ($i = 0; $i <= $N-1; $i++) {
        if ($X[$i] < $Mn){ 
            $Mn = $X[$i];
        }
    }
    return $Mn;
}
    function Maxi($X) {
    $Mx = $X[0];
    $N = count($X);
    for ($i = 0; $i <= $N-1; $i++) {
        if ($X[$i] > $Mx){ 
            $Mx = $X[$i];
        }
    }
    return $Mx;
}

    function EcrireRapport($X) {
    $Mn=Mini($X);
    $Mx=Maxi($X);
    echo ("<div style= 'margin: 5px;'>");
    echo ("<table style='border-collapse: collapse; text-align: center; margin: auto; height: 250px; width: 300px; background-color: lightpink;'>");
    echo ("<caption style='border: solid; background-color: beige;'>ExtremaN</caption>");
    echo ("<tr>");
    echo ("<th style='border: solid; background-color: beige;'>Max:</th>");
    echo ("<th style='border: solid; background-color: beige;'>Min:</th>");
    echo ("</tr>");
    echo ("<tr>");
    echo ("<td style='border: solid; background-color: beige;'>$Mx</td>");
    echo ("<td style='border: solid; background-color: beige;'>$Mn</td>");
    echo ("</tr>");
    echo ("</table>");
    echo ("</div>");

    } 
    if(isset($_POST['txtListeNombres'])) {
        $txtListeNombres=$_POST['txtListeNombres'];
        $nombres=explode(",",$txtListeNombres);
        EcrireRapport($nombres);
        }  
    
?>
        <div class="formulaire">
            <form name="frmExtremaN">
                <label for="frmExtremaN" style="color: rgb(255, 255, 255); font-size: 30px;">Projet Extrema N</label>
                <p>Ce projet peut rechercher les maximum et minimum parmi N nombres.</p>
                <p>ANALYSE : <br>
                    1.	LIRE LES NOMBRES A, B ET C<br>
                    2.	 COMPARER A ET B AFIN DE DÉTERMINER LE MAX ET LE MIN<br>
                    a.	SI A>B -> A EST LE MAXIMUM, B LE MINIMUM<br>
                    b.	SINON B -> A EST LE MINIMUM, B LE MAXIMUM<br>
                    3.	COMPARER LE nÈME NOMBRE AVEC LES EXTRÊMES PRÉCÉDENTS<br>
                    a.	SI C>MAX ->C EST LE MAXIMUM<br>
                    b.	SI C< MIN ->C EST LE MINIMUM<br>
                    4.	ÉCRIRE MAX ET MIN
                    </p>
                <br> <hr> <br>
            <label for="txtListeNombres" style="color: rgb(225, 82, 105); font-size: 30px;">Extrema N</label>
            <br>
            <br>
            Combien il y'aura-t-il de nombres: <input type="text" name="txtListeNombres" id="txtListeNombres" size="15">
            <hr>
            <input type="submit" name="btnExtremaN" value="créer un rapport">
        </form>
            </div>
            <br>
    </section>
    <section id="Indice">
        <!-- <script>
            function Lire(X){
                N = document.frmIndiceExtremaN.txtN.value;
                for (let i = 0; i <= N - 1; i++){
                    X[i] = parseFloat(prompt("Entrer le nombre :"));
                }  
            }
            function EcrireTableau(X){
                document.write("<table style='border-collapse:collapse; width:90%; margin: 0 auto; text-align:center; background-color: rgba(32, 86, 72, 0.543)'>");
                document.write("<caption style='border: 2px solid black; background-color: rgba(32, 86, 72)'>"); document.write("Voici les nombres lus"); document.write("</caption>");
                document.write("<tr>");
                for (let i = 0; i <= N - 1; i++){
                    document.write("<td style='border: 1px solid black'>"); document.write(X[i]); document.write("</td>");
                }
                document.write("</tr>");
                document.write("</table>");
            }
            function EcrireTableauExtrema(X){
                N = X.length;
                iMn=iMin(X)
                iMx=iMax(X);
                document.write("<table style='border-collapse:collapse; width:90%; margin: 0 auto; text-align:center; background-color: rgba(32, 86, 72, 0.543)'>");
                document.write("<caption style='border: 2px solid black; background-color: rgba(32, 86, 72)'>"); document.write("Voici les extrema"); document.write("</caption>");
                document.write("<tr>");
                document.write("<th style='border: 1px solid black'>"); document.write("Minimum"); document.write("</th>");
                document.write("<th style='border: 1px solid black'>"); document.write("Maximum"); document.write("</th>");
                document.write("</tr>");
                document.write("<tr>");
                document.write("<td style='border: 1px solid black'>"); document.write(X[iMn]); document.write("</td>");
                document.write("<td style='border: 1px solid black'>"); document.write(X[iMx]); document.write("</td>");
                document.write("</tr>");
                document.write("<tr>");
                document.write("<th style='border: 1px solid black'>"); document.write("Indice Min"); document.write("</th>");
                document.write("<th style='border: 1px solid black'>"); document.write("Indice Max"); document.write("</th>");
                document.write("</tr>");
                document.write("<tr>");
                document.write("<td style='border: 1px solid black'>"); document.write(iMn); document.write("</td>");
                document.write("<td style='border: 1px solid black'>"); document.write(iMx); document.write("</td>");
                document.write("</tr>");
                document.write("</table>");
            }
            function iMin(X){
                iMn = 0;
                N = X.length;
                for (let i = 1; i <= N - 1; i++){
                    if (X[i] < X[iMn]){
                    iMn = i;
                    }
                }
                return iMn;
            }
            function iMax(X){
                iMx = 0;
                N = X.length;
                for (let i = 1; i <= N - 1; i++){

                    if (X[i] > X[iMx]){
                    iMx = i;
                    }
                }
                return iMx;
            }
            function ExtremaN(){
                N = document.frmIndiceExtremaN.txtN.value;
                console.log("value of N :");
                console.log(N);
                let Nombres = new Array();
                Lire(Nombres);
                EcrireTableau(Nombres);
                EcrireTableauExtrema(Nombres);
            }
        </script>-->


        <div class="formulaire">
            <form name="frmIndiceExtremaN">
                <label for="txtRapport" style="color: rgb(255, 255, 255); font-size: 30px;">Projet Indice Extrema N</label>
                <p>Ce projet recherche les indices du maximum et du minimum parmi N nombres cad la position du maximum et du minimum dans le tableau.
                    <br>Ainsi si le tableau contient: 6, -8, -4, 2,10,4 on indiquera que : le minimum est l’élément n° 1 du tableau ET le maximum est l’élément n° 4 du tableau</p>
                <br> <hr> <br>
                Combien de nombres y aura-t-il ? : <input type="text" name="txtN" id="N" size="15" style="margin-bottom: 15px;">
                <hr> <br>
              <!--  <input type="button" name="btnExtremaN" value="Créer le tableau" onclick="ExtremaN()">-->
            </form>
            </div>
    </section>
</body>
</html>
