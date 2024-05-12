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
                <li class="deroulement"><a href="#">Structures conditionnelles</a>
                    <div class="onglets">
                        <a href="#Cerc">Cercle</a>
                        <a href="#FonctQuad">Fonction quadratique</a>
                        <a href="#Calc">Calculette</a>
                        <a href="#Civi">Civilité</a>
                        <a href="#DaLong">Date Longue</a>
                    </div>
                </li>
                <li><a href="./StructuresRépétitivesEtFonctions.html">Structures répétitives et fonctions</a></li>
                <li><a href="./Tableaux.html">Tableaux</a></li>
                <li class="deroulement"><a href="./FinApprentissage.html">Fin d’apprentissage </a>
                    <div class="onglets">
                        <a href="./FinApprentissage.html#Tr">Tris</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <section id="Cerc">
        <script>
            function Cercle()
            {
               var Rayon, Surface, Circonference;
               Rayon=parseFloat(document.frmCercle.txtRayon.value);
               if(Rayon>0){
               Surface=Math.PI*Rayon**2;
               Circonference=2*Math.PI*Rayon;
               document.frmCercle.txtSurface.value=Surface;
               document.frmCercle.txtCirconference.value=Circonference;
               }
       
               else{
                  alert("Calcul impossible! Un rayon doit être positif ou nul"); 
                  frmCercle.reset();
               }
            }
           </script>
           <h1>Projet Cercle</h1>
           <form class="formulaire" name="frmCercle">
           <p>ENONCÉ : CALCULER LA SURFACE ET LA CIRCONFÉRENCE D’UN CERCLE.</p>
           <p>ANALYSE : <br>
            1.	LIRE RAYON (RAYON)<br>
            2.	SI RAYON EST POSITIF<br>
            a.	CALCULER LA SURFACE (SURFACE=Π*RAYON^2)<br>
            b.	CALCULER LA CIRCONFÉRENCE (CIRC=2*Π*RAYON)<br>
            c.	ECRIRE SURFACE ET CIRCONFÉRENCE  </p> <br>
               Rayon : <input type="text" name="txtRayon" id="rayon" size="15">
               <input type="button" name="btnEgal" value="=" onclick="Cercle();">
               <hr> <br>
               Surface : <input type="text" name="txtSurface" id="surface" size="15">
               Circonférence : <input type="text" name="txtCirconference" id="circonference" size="15">
           </form>
    </section>

    <section id="FonctQuad">
        <script>
        function calculDélLiv() {
            var HCom = parseFloat(document.frmDélLiv.HCom.value);
            var MnCom = parseFloat(document.frmDélLiv.MnCom.value);
            var HLiv = parseFloat(document.frmDélLiv.HLiv.value);
            var MnLiv = parseFloat(document.frmDélLiv.MnLiv.value);
        
            var ConvCom = HCom * 3600 + MnCom * 60;
            var ConvLiv = HLiv * 3600 + MnLiv * 60;
            var DélLiv = ConvLiv - ConvCom;
        
            var H = Math.floor(DélLiv / 3600);
            var Mn = Math.floor((DélLiv % 3600) / 60);
            var Sec = DélLiv % 60;
        
            if (HLiv < HCom) {
                document.frmDélLiv.DélLiv.value = "Le colis sera retourné au dépôt.";
            } 
            else {
                if (DélLiv <= 43200) {
                    echo = "Délais respecté !";
                } 
                else {
                    echo = "Délais de livraison trop long !";
                }
                document.frmDélLiv.DélLiv.value = H + " heures, " + Mn + " minutes, " + Sec + " secondes";
            }
            document.frmDélLiv.Temps.value = echo;
        }
        </script>
        
        <h1>Projet Délais de livraison</h1>
        <form class="formulaire" name="frmDélLiv">
        <p>Enoncé : Est-ce que la firme a respecté les délais de livraison ? Dépasse t’elle 12 heures de délais et est-ce que le dépôt du colis se fait après la commande pour pouvoir effectuer la vérification ?</p>
        <p>Analyse :  <br>
            1.	Lire heure et secondes de la commande (HCom et MnCom) <br>
            2.	Lire heure et secondes de livraison (HLiv et MnLiv) <br>
            3.	Calculer ConvCom, ConvLiv,DelLiv <br>
            A	Convertir commande en secondes (ConvCom=HCom*3600+MnCom*60) <br>
            B	Convertir commande en secondes (ConvLiv=HLiv*3600+MnLiv*60) <br>
            C	Délais de livraison= H livraison en secs– H commande en secs  <br>
            4.	Si HLiv < HCom  <br>
            A	Ecrire «erreur: livraison incorrecte,colis renvoyé»(Fin) <br>
            5.	SINON (HLiv > HCom) donc  <br>
            A	Ecrire « correct: livraison correcte (postérieure à la demande),colis envoyé» <br>
            6.	Si DélLiv <= 12h (DélLiv <= 12*3600 car en secondes) <br>
            A	Ecrire "correct: délais respecté car - de 12h" <br>
            B	SINON Ecrire « erreur : délais non-respecté car trop long » <br>
            7.	Calculer la durée de livraison HDL,MDL,SDL <br>
            A	HDL=heure délais livraison (DélLiv//3600) <br>
            B	SDL=Secondes délais Livraison (DélLiv –HDL *3600) <br>
            C	MDL=minute délais livraison (SDL//60) <br>
            8.	Affichage du temps de livraison: H,Mn,Sec  <br>
            A	ECRIRE "Temps de livraison =" , HDL, "heures" , MDL, "minutes" , SDL, "secondes" <br>
            B	    SINON Ecrire "Retourné au dépôt" </p>  <br>
             <hr> <br>
            <label for="HCom">Heure de la commande :</label>
            <input type="text" id="HCom" name="HCom" size="10"> 
            <label for="MnCom">Minutes de la commande:</label>
            <input type="text" id="MnCom" name="MnCom" size="10"><br>
            <label for="HLiv">Heure de la livraison :</label>
            <input type="text" id="HLiv" name="HLiv" size="10">
            <label for="MnLiv">Minutes de la livraison:</label>
            <input type="text" id="MnLiv" name="MnLiv" size="10">
            <input type="button" value="Calculer" onclick="calculDélLiv()">
            <br> <hr> <br>
            <label for="DélLiv">Délais de la livraison:</label>
            <input type="text" id="DélLiv" name="DélLiv" size="30"><br>
            <label for="Temps">Est-ce que le temps de livraison est respecté ?</label>
            <input type="text" id="Temps" name="Temps" size="30"><br>
        </form>
    </section>

    <section id="Calc">
        <script>
            function Calculette()
            { var A,B,OP,R;
                A=parseFloat(document.frmCalculette.txtA.value);
                OP=(document.frmCalculette.txtOP.value);
                B=parseFloat(document.frmCalculette.txtB.value);
                switch(OP) {
                    case("+"):
                                R=A+B;
                                break;
                    case("-"):
                                R=A-B;
                                break;
                    case("*"):
                                R=A*B;
                                break;
                    case("/"):
                        if(B!=0){
                                R=A/B;
                        }
                        else {
                                R="Division par 0";
                        }
                        break;
                    case("%"):
                        if(B!=0){
                                R=A%B;
                        }
                        else {
                                R="Division par 0";
                        }
                        break;
                    default:
                            R="Opération non prévue";
                }
                document.frmCalculette.txtR.value=R;
            }
        </script>
        <h1>Projet Calculette </h1>
        <form class="formulaire" name="frmCalculette">
            <p>ENONCÉ : RÉALISER UNE CALCULETTE PERMETTANT DE RÉALISER LES CALCULS ARITHMÉTIQUES DE BASE.</p>
            <p>ANALYSE : <br>
                1.	LIRE LES DEUX NOMBRES (A ET B)<br>
                2.	Lire l’opérateur (OP)<br>
                3.	EN FONCTION DE L’OP CHOISIT, FAIRE<br>
                a.	LA SOMME<br>
                b.	LA DIFFÉRENCE<br>
                c.	LE PRODUIT<br>
                d.	LE MOD<br>
                e.	LA DIVISION<br>
                4.	ECRIRE LE RÉSULTAT </p><br>
                <hr> <br>
            Premier nombre :<input type="text" name="txtA">
            Opérateur :<input type="text" name="txtOP">
            Deuxième nombre :<input type="text" name="txtB">
            <input type="button" name="btnEgal" value="=" onclick="Calculette();">
            <hr> <br>
            Résultat :<input type="text" name="txtR" size="25">
        </form>
    </section>

    <section id="Civi">
        <script>
            function envoyer() {
                let nom=document.frmCivilité.txtNom.value;
                let prenom=document.frmCivilité.txtPrenom.value;
                let adresse=document.frmCivilité.txtAdresse.value;
                let pays=document.frmCivilité.lstPays.value;
                let sexe=document.frmCivilité.rdBtnSexe.value;

                let vedette=(sexe=="F")?"Madame":"Monsieur";
                let salutation="Bonjour "+vedette+" "+prenom+" "+nom+", vous habitez "+adresse+" en "+pays;
                alert(salutation);
            }
        </script>
        <h1>Projet Civilité </h1>
        <form class="formulaire" name="frmCivilité">
            <p>ENONCÉ : AFFICHER LA CIVILITÉ (MONSIEUR OU MADAME) D’UNE PERSONNE.
                A PARTIR D’UN FORMULAIRE CONTENANT LES NOMS, PRÉNOM, ADRESSE, PAYS ET SEXE D’UNE PERSONNE, ON AFFICHERA UN MESSAGE CONTENANT LA CIVILITÉ DE LA PERSONNE.</p> <br>
            <hr> <br>
            <label for="nom">Nom:</label>
                <input type="text" name="txtNom" id="nom"> <br>
            <label for="prenom">Prénom:</label>
                <input type="text" name="txtPrenom" id="prenom"> <br>
            <label for="adresse">Adresse:</label>
                <input type="text" name="txtAdresse" id="adresse" cols="30" rows="10"> <br>
            <label for="pays">Pays:</label>
                <select name="lstPays" id="pays">
                    <option value="France">France</option>
                    <option value="Belgique">Belgique</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Allemagne">Allemagne</option>
                </select> <br>
            <label>Sexe:</label>
                <label for="rdBtnSexe">H</label><input type="radio" name="rdBtnSexe" size="15" value="H">
                <label for="rdBtnSexe">F</label><input type="radio" name="rdBtnSexe" size="15" value="F" checked> <br>
            <input type="button" value="Envoyer" name="BtnEnvoyer" onclick="envoyer()">
        </form>
    </section>

    <section id="DaLong">
        <script>
            function DL(){
                var J, M, A, NbFev, Mois;
                J=parseFloat(document.frmDL.txtJ.value);
                M=parseFloat(document.frmDL.txtM.value);
                A=parseFloat(document.frmDL.txtA.value);
                if (A%400==0){
                    NbFev=29;
                }
                else{
                    if(A%100!=0){
                        if (A%4==0){
                            NbFev=29;
                        }
                        else{
                            NbFev=28;
                        }
                    }
                    else{
                        NbFev=28;
                    }
                }
                switch (M){
                    case 1:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Janvier";
                            document.write(J+Mois+A);
                        }
                        break; 

                    case 2:
                        if (J>NbFev){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Février";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 3:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Mars";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 4:
                        if (J>30){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Avril";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 5:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Mai";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 6:
                        if (J>30){
                            alert("Date incorrecte");
                    }
                        else{
                            Mois="Juin";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 7:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Juillet";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 8:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Août";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 9:
                        if (J>30){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Septembre";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 10:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Octobre";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 11:
                        if (J>30){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Novembre";
                            document.write(J+Mois+A);
                        }
                        break;
                    case 12:
                        if (J>31){
                            alert("Date incorrecte");
                        }
                        else{
                            Mois="Décembre";
                            document.write(J+Mois+A);
                        }
                        break;
                    default : 
                            document.write("Date incorrecte");
                }
            }
        </script>
        <h1>Projet Date Longue</h1>
        <form class="formulaire" name="frmDL">
            <p>ENONCÉ QUE FAIT CET ALGORITHME ? TRANSFORMER UNE DATE DE TYPE ABRÉGÉE EN DATE LONGUE.</p>
            <p>ANALYSE : <br>
                1.	LIRE LA DATE ABRÉGÉE EN JOUR, EN MOIS, EN ANNÉE <br>
                2.	VÉRIFIER LA VALIDITÉ DE LA DATE  <br>
                a.	LIRE L’ANNÉE (A) <br>
                b.	DIVISER PAR 400 <br>
                i.	SI AN%400=0, ANNÉE BISSEXTILE <br>
                ii.	SINON, ANNÉE PAS BISSEXTILE <br>
                c.	DIVISER L’ANNÉE PAR 100 <br>
                i.	SI AN%100<>0 <br>
                1.	DIVISER L’ANNÉE PAR 4 <br>
                a.	SI AN%4=0, ANNÉE BISSEXTILE <br>
                b.	SINON, ANNÉE PAS BISSEXTILE <br>
                ii.	SINON, ANNÉE PAS BISSEXTILE <br>
                d.	ECRIRE SI LA DATE EST VALIDE OU NON <br>
                3.	ECRIRE LA DATE LONGUE  </p> <br>
            <hr> <br>
            Jours : <input type="text" name="txtJ" id="J" size="15">
            Mois : <input type="text" name="txtM" id="M" size="15">
            Année : <input type="text" name="txtA" id="A" size="15">
            <input type="button" name="btnEgal" value="=" onclick="DL();">
        </form>
    </section>
</body>
</html>