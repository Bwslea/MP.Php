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
                <li><a href="#">Structures répétitives et fonctions</a></li>
                <li><a href="./Tableaux.html">Tableaux</a></li>
                <li class="deroulement"><a href="./FinApprentissage.html">Fin d’apprentissage </a>
                    <div class="onglets">
                        <a href="./FinApprentissage.html#Tr">Tris</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section id="jeuMains">
        <script>
            function jeu(){
                var Na,Nb,SCA,SCB,S,V;
                SCA=0;
                SCB=0;
                do{
                    Na=parseFloat(prompt("Joueur A, introduisez votre propositon :"));
                    Nb=parseFloat(prompt("Joueur B, introduisez votre propositon :"));
                    S=Na+Nb;
                    
                    if(S%2==0){
                        SCA=SCA+1;
                    }
                    
                    else{
                        SCB=SCB+1;
                    }
                }
                while(Math.abs(SCA-SCB)!=3 && SCA+SCB!==7);
                if (SCA>SCB){
                    V="joueur A";
                }
                else{
                    V="joueur B";
                }
                document.write("Le vainqueur est le " +V);
            }
        </script>
        <h1>Projet Jeu de mains </h1>
        <form class="formulaire" name="frmJeuMain">
            <p>ENONCÉ : SI LA SOMME DES DOIGTS MONTRÉS EST PAIRE, LE 1E JOUEUR MARQUE UN POINT. SI LA SOMME DES DOIGTS MONTRÉS EST IMPAIRE, C’EST LE 2E JOUEUR QUI MARQUE UN POINT. LE JEU S’ARRÊTE LORSQUE QUE L’ON AURA JOUÉ 21 FOIS OU LORSQUE L’UN DES 2 JOUEURS AURA MARQUÉ 3 POINTS DE PLUS QUE SON ADVERSAIRE.</p>
            <p>ANALYSE : <br>
                1.	SCA=0 ; SCB=0 (score des joueurs initial) <br>
                2.	Lire le nombres proposé par le joueur A et le joueur B, entre 0 et 5 (Na et Nb) <br>
                3.	Calculer la somme de Na et Nb (S=Na+Nb) <br>
                4.	Vérifier si la somme est paire (S MOD2 =0 ?) <br>
                a.	Si OUI, le joueur A marque un point (SCA=SCA+1)ancien et nv score <br>
                b.	Si NON, l joueur B marque un point (SCB=SCB+1) <br>
                5.	Recommencer les étapes de 2 à 4 jusqu’à ce qu’un des deux joueurs ai marqué 3 points de + que l’adversaire (SCA-SCB=3 ? ou SCA-SBA=-3 ?) (/SCA-SCB/=3 ?) <br>
                OU lorsqu’on a joué 7 fois (SCA+SCB=7 ?)  <br>
                6.	Déterminer le vainqueur (SCA>SCB ?) <br>
                7.	Ecrire le vainqueur
                </p> <br>
            <hr> <br>
            <input type="submit" value="jouer" onclick="jeu()">
        </form>
        <br>

    </section>
    <section id="jeuDevin">
        <script>
            function jeuDevin(){
                var Jeu, Na, Nb;
                Jeu=0;
                Na=Math.floor(Math.random()*100)+1;
                do{
                    do{
                        Nb=parseFloat(prompt("Introduire une proposition:"));
        
                        if(Nb<1 || Nb>100){
                        alert("Introduire un nombre entre 1 et 100");        
                        }
        
                    }
                    while(Nb<1||Nb>100);

                    Jeu=Jeu+1;
                
                    if(Na<Nb){
                        alert("Le nombre proposé est trop grand");
                    }
                    else if (Na>Nb){
                        alert("Le nombre proposé est trop petit");
                    } 
                        
                }
                while((Jeu!=11) && (Na!=Nb));
    
                if(Na==Nb){
                    document.write("Gagné en ", +Jeu, "essais");
                }
                else{
                    document.write("Perdu, le nombre mystère était ", +Na);
                }
            }
        </script>
        <h1>Projet Jeu du devin </h1>
        <form class="formulaire" name="frmJeuDevin">
            <p>ENONCÉ : L’ORDINATEUR CHOISIT ALÉATOIREMENT UN NOMBRE MYSTÉRIEUX COMPRIS ENTRE 1 ET 100. LE JOUEUR B DOIT DEVINER CE NOMBRE. LE JEU S’ARRÊTE LORSQUE L’ON A JOUÉ 11 FOIS OU LORSQUE LE JOUEUR A TROUVÉ CE NOMBRE MYSTÉRIEUX.</p>
            <p>ANALYSE : <br>
                1.	JEU=0 <br>
                2.	LIRE NA (ENTIER COMPRIS ENTRE 0 ET 100) <br>
                3.	JEU=JEU+1 <br>
                4.	LIRE NB <br>
                5.	INDIQUER SI IL EST PLUS PETIT QUE NA, >=NA <br>
                a.	SI NA>NB, ALORS NB< NA <br>
                b.	SI NA< NB, ALORS NB >NA <br>
                c.	SI NA=NB, ALORS NB=NA <br>
                6.	RECOMMENCER LES ÉTAPES 2 ET 3 JUSQU’À CE QUE L’ON A JOUÉ 11 FOIS (JEU=11) OU JUSQU’À CE QUE LE JOUEUR B TROUVE LE NA (NA=NB) <br>
                7.	DÉTERMINER LE VAINQUEUR  <br>
                a.	SI NA=NB, V EST LE JOUEUR B <br>
                b.	SINON, V EST LE JOUEUR A <br>
                8.	ECRIRE LE VAINQUEUR (V) <br>
                </p> <br>
            <hr> <br>
            <input type="submit" value="jouerDevin" onclick="jeuDevin()">
        </form>
        <br>
        
    </section>
    <section id="PGCD">
        <script>
            function pgcd(){
                A = document.frmPgcd.nbrA.value;
                B = document.frmPgcd.nbrB.value;
                if(A>B){
                    C = A;
                    A = B;
                    B = C;
                }
                while(B != 0){
                    reste = A%B;
                    A = B;
                    B = reste;
                }
                document.write("Le pgcd entre A et B est ", A);
            }
        </script>
        <h1>Projet PGCD </h1>
        <form class="formulaire" name="frmPgcd">
            <p>ENONCÉ : RECHERCHER LE PGCD ENTRE DEUX NOMBRES NATURELS A ET B DONNÉS.</p>
            <p>ANALYSE :  <br>
                1.	LIRE A ET B  <br>
                2.	DIVISER A PAR B (A/B)  <br>
                3.	RESTE=AMODB  <br>
                4.	A=B  <br>
                5.	B=RESTE  <br>
                6.	RÉPÉTER B=0  <br>
                a.	SI OUI , PGCD=A  <br>
                b.	SI NON, ON RECOMMENCE LES ÉTAPES 2-5  <br>
                7.	RGPD=A  <br>
                8.	ECRIRE LE PGCD
                </p> <br>
            <hr> <br>
            <label>A :</label> <input type="number" name="nbrA"><br>
            <label>B :</label> <input type="number" name="nbrB"><br>
            <input type="submit" value="calculerPGCD" onclick="pgcd()">
        </form>
        <br>
    </section>
    <section id="Moyenne">
        <script>
        function moyenne(){
            var moy, resultat, i, n, S;
            do{
                n= document.frmMoyenne.nbrEtudiant.value;
            }
            while(n<=0);
            S=0
            for(i=0; i<=n-1; i=i+1){
                do{
                    resultat =parseFloat(prompt("Introduire le résultat de l'étudiant"));
                }
                while(resultat<0 || resultat>20);
                    S=S+resultat
            }
            moy=S/n
            
            document.write("La moyenne de la classe est de : " +moy);
        }
    </script>
        <h1>Projet Moyenne </h1>
    <form class="formulaire" name="frmMoyenne">
        <p>ENONCÉ : CALCULER LA MOYENNE D’UNE CLASSE DE N ÉTUDIANTS À UN EXAMEN.</p>
        <p>ANALYSE :   <br>
            1.	LIRE LE NOMBRE N D’ÉTUDIANTS  <br>
            2.	LIRE LES RÉSULTATS DES N ÉTUDIANTS  <br>
            3.	CALCULER LA SOMME DES RÉSULTATS DES N ÉTUDIANTS  <br>
            4.	CALCULER LA MOYENNE DES N ÉTUDIANTS ( MOY=SOMME/N )  <br>
            5.	ECRIRE LA MOYENNE
            </p> <br>
        <hr> <br>
        <input type="number" name="nbrEtudiant">
        <input type="submit" onclick="moyenne()">
    </form>
    <br>
        
    </section>
    <section id="PPCM">
        <script>
            function PGCD(A, B){
                if(A>B){
                    C = A;
                    A = B;
                    B = C;
                }
                while(B != 0){
                    reste = A%B;
                    A = B;
                    B = reste;
                }
                return A;
            }

            function PPCM(){
                var PPCM;
                A=parseInt(document.frmPPCM.nbrAp.value);
                B=parseInt(document.frmPPCM.nbrBp.value);
                PPCM=(A*B)/PGCD(A,B);
                document.write("Le PPCM est de : ",  PPCM);
            }  
        </script>
        <h1>Projet PPCM </h1>
        <form class="formulaire" name="frmPPCM">
            <p>ENONCÉ : RECHERCHER LE PPCM ENTRE 2 NOMBRES NATURELS </p>
            <p>ANALYSE :   <br>
                1.	LIRE LES 2 NOMBRES (A,B)  <br>
                2.	CALCULER LE PGCD ENTRE A ET B  <br>
                3.	CALCULER LE PPCM (A*B/PGCD(A,B))  <br>
                4.	ECRIRE LE PPCM
                </p> <br>
            <hr> <br>
            <label>A :</label> <input type="number" name="nbrAp"><br>
            <label>B :</label> <input type="number" name="nbrBp"><br>
            <input type="submit" value="calculerPPCM" onclick="PPCM()">
        </form>
        <br>

    </section>
    <section id="SommeNaturels">
        <script>
            function sommeNaturel(){
                N = document.frmSommeN.nbrN.value;
                somme = 0;
                for(let i=0; i <= N; i++){
                    somme += i;
                }
                document.write("Somme des nombres allant jusqu'à ", N," est de ", somme);
            }
        </script>
        <h1>Projet Somme Naturels </h1>
        <form class="formulaire" name="frmSommeN">
            <p>ENONCÉ : CALCULER LA SOMME DES N PREMIERS NATURELS. </p>
            <p>ANALYSE :   <br>
                1.	LIRE N <br>
                2.	CALCULER LA SOMME DE N NOMBRE NATURELS (S=1+2+3, +N), CHAQUE NOMBRE VARIE DE 1 À N -> BOUCLE POUR <br>
                3.	ECRIRE LA SOMME DES N PREMIERS NOMBRES NATURELS (S)
                </p> <br>
            <hr> <br>
            <input type="number" name="nbrN">
            <input type="submit" value="calculerSomme" onclick="sommeNaturel()">
        </form>
        <br>
        
    </section>
    <section id="SommePairs">
        <script>
            function sommeNaturelPair(){
                N = document.frmSommeNP.nbrNP.value;
                somme = 0;
                for(let i=2; i <= N; i=i+2){
                    somme += i;
                }
                document.write("Somme des nombres pair allant jusqu'à ", N," est de ", somme);
            }

        </script>
        <h1>Projet Somme Pairs </h1>
        <form class="formulaire" name="frmSommeNP">
            <p>ENONCÉ : CALCULER LA SOMME DES NOMBRES PREMIERS NATURELS PAIRS.</p>
            <p>ANALYSE :  <br>
                1.	LIRE N  <br>
                2.	CALCULER LA SOMME DES NOMBRES NATURELS PAIRS (S=2+4+6, +N), CHAQUE NOMBRE VARIE DE 2 À N -> BOUCLE POUR  <br>
                3.	ECRIRE LA SOMME DES NOMBRES NATURELS PAIRS (S)
                </p> <br>
            <hr> <br>
            <input type="number" name="nbrNP">
            <input type="submit" value="calculerSommePair" onclick="sommeNaturelPair()">
        </form>
        <br>
        
    </section>
    <section id="CoefficientsBinomiaux">
        <script>
            function fact(X){
                F = 1;
                if(X === 0 ){
                    return 1;
                }
                for(let i=1;i <= X; i++){
                    F = F*i;
                }
                return F;
            }

            function coefBinomiaux(){
                n = document.frmCB.nbrCBN.value;
                k = document.frmCB.nbrCBK.value;
                if(n < k){
                    alert("Coefficient impossible");
                }
                cb = fact(n)/(fact(k)*fact(n-k));
                document.write("Coef binomial pour N = ", n, " et K = ", k," vaut : ", cb);
            }
        </script>
        <h1>Projet Coefficients Binomiaux </h1>      
        <form  class="formulaire" name="frmCB">
            <p>ENONCÉ : CALCULER LES COEFFICIENTS BINOMIAUX.</p>
            <p>ANALYSE : <br>
                1.	LIRE N <br>
                2.	ECRIRE N FACTORIEL ( N ! = FACT(N) )
                </p> <br>
            <hr> <br>
            <input type="number" name="nbrCBN">
            <input type="number" name="nbrCBK">
            <input type="submit" value="calculerCoefBinomiaux" onclick="coefBinomiaux()">
        </form>
        <br>
    </section>
</body>
</html>