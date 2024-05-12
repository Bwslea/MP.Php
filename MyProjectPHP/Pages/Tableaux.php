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
                        <a href="./FinApprentissage.html#Tr">Tris</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="testAchat">
        <script>
            function somme(X){
                let S=0;
                let N=X.length;
                for(let i=0;i<=N-1;i++){
                    S=parseFloat(X[i]);
                }
                return S; 
            }
            function EcrireRapport(X){
                let N=X.length;
                let prixmoyen=somme(X)/N;
                  document.write("<div style='border-collapse:collapse;width:90%;margin:0 auto;text-align:center;background-color:rgba(32, 86, 72, 0.543); margin:15px;'>"); 
                  document.write("<legend>"); document.write("Rapport : Test Achat"); document.write("</legend>");
                  
                  document.write("<table style='border-collapse:collapse;width:90%;margin:0 auto;text-align:center;background-color:rgba(32, 86, 72, 0.543);'>");
                  document.write("<tr style='background-color :rgba(32, 86, 72, 0.543) ;color:beige'>");
                  document.write("<th style='border: 1px solid rgba(32, 86, 72)'>Magasin n°</th>");
                  document.write("<th style='border: 1px solid rgba(32, 86, 72)'>Prix</th>");
                  document.write("<th style='border: 1px solid rgba(32, 86, 72)'>%</th>");
                  document.write("</tr>");
                    for(let i=0;i<=N-1;i++){
                        let prct=X[i]/prixmoyen;
                          document.write("<tr>");
                          document.write("<td style='border: 1px solid rgb(116, 143, 105)'>"); document.write(i); document.write("</td>");
                          document.write("<td style='border: 1px solid rgb(116, 143, 105)'>"); document.write(X[i]); document.write("</td>");
                          document.write("<td style='border: 1px solid rgb(116, 143, 105)'>"); document.write(prct); document.write("</td>");
                          document.write("</tr>");
                    }
                        document.write("<tr>");
                        document.write("<td style='border: 1px solid rgb(116, 143, 105)'>"); document.write("Prix Moyen"); document.write("</td>");
                        document.write("<td colspan='2' style='border: 1px solid rgb(116, 143, 105)'>"); document.write(prixmoyen.toFixed(2)+"€"); document.write("</td>");
                        document.write("</tr>");
                        document.write("</table>");
                        document.write("</div>"); 
            }
            function Rapport(){
                var prix=new Array();
                var ListePrix=document.frmTestAchats.txtListePrix.value;
                prix=ListePrix.split(","); 
                EcrireRapport(prix);
            }
        </script>
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
                Encoder tous les prix comme suit : 4,9,2, ... <input type="text" name="txtListePrix" id="N" size="15" style="margin-bottom: 15px;">
                <hr>
                <br>
                <input type="button" name="btnExtremaN" value="Créer le tableau" onclick="Rapport()">
            </form>
            </div>
            <br>
    </section>
    <section id="extremaN">
    <script>
        function Lir(X){
            let N,i;
            N = document.frmExtremaN.txtIN.value; 

            for (i =0; i<=(N-1); i++) {
                 X[i] = parseFloat(prompt("Entrer le nombre n° "+(i+1)+" :"));
            }
        } 
        function Min(X){
            let N=X.length,i,Mn;
            Mn=X[0];
            for( i=1;i<N;i++){
                if(X[i]<Mn)
                    Mn=X[i];
            } 
            return Mn;  
        } 
        function Max(X){
            let N=X.length,i,Mx;
            Mx=X[0];
            for( i=1;i<N;i++){
                if(X[i]>Mx)
                    Mx=X[i];
            } 
            return Mx;
        }   
        function rechercher (){
            let X =new Array();
            /* Lecture de N nombres*/
            Lir(X);

            /* Ecrire des extrema */
            document.write("<h1 style='color: rgba(32, 86, 72);'>Rapport : Extrema N</h1>");
            document.write('<div style="background-color: rgba(32, 86, 72, 0.543); padding: 10px; margin-bottom: 10px; width: 80%; height: 200px;">');
            document.write('<table border="1" style="width: 100%; height: 100%;">');
            document.write('<tr><th><p></p></th><th><p style="color: black;">Valeur</p></th></tr>');
            document.write('<tr><td>Maximum</td><td>' + Max(X) + '</td></tr>');
            document.write('<tr><td>Minimum</td><td>' + Min(X) + '</td></tr>');
            document.write('</table>');

        }       
    </script> 
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
                Combien de nombres y aura-t-il ? <input type="text" name="txtIN" id="N" size="15" style="margin-bottom: 15px;">
                <hr>  <br>
                <input type="button" name="btnExtremaN" value="Créer le tableau" onclick="rechercher()">
            </form>
            </div>
            <br>
    </section>
    <section id="Indice">
        <script>
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
        </script>


        <div class="formulaire">
            <form name="frmIndiceExtremaN">
                <label for="txtRapport" style="color: rgb(255, 255, 255); font-size: 30px;">Projet Indice Extrema N</label>
                <p>Ce projet recherche les indices du maximum et du minimum parmi N nombres cad la position du maximum et du minimum dans le tableau.
                    <br>Ainsi si le tableau contient: 6, -8, -4, 2,10,4 on indiquera que : le minimum est l’élément n° 1 du tableau ET le maximum est l’élément n° 4 du tableau</p>
                <br> <hr> <br>
                Combien de nombres y aura-t-il ? : <input type="text" name="txtN" id="N" size="15" style="margin-bottom: 15px;">
                <hr>
                <br>
                <input type="button" name="btnExtremaN" value="Créer le tableau" onclick="ExtremaN()">
            </form>
            </div>
    </section>
</body>
</html>