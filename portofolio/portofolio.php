<!DOCTYPE html>
<html> <!-- le fichier portofolio qui regroupe l'entête et le pieds de page  contient tous les liens relatifs à
mes cours d'apprentissage et réalisations. C'est le fichier central. Chaque lien s'ouvrira sur un nouvel onglet 
avec son contenu respectif. -->
<!-- -->
    <head>
        <title>portofolio de Pascal Pierre</title>
        <meta charset="utf-8">
        <style>
            body{
                margin: 0px ;
                padding: 0px;
            }
            *{
                margin: 0px;
                padding: 0px;
            }
            #banniere{
                height: 200px;
                border: solid 1px purple;
                background-image: url(images/image.jpg); 
                background-size : contain ;
                background-repeat: repeat;
                background-position: center;
            }
            #wrapper{
                margin: 0px;
                padding: 0px;
                position: relative ;
                border: 2px solid yellow ;
            }
            
            #cours{
               /* margin: 0% 30% 20px 30% ;*/
                border: 2px solid rgb(145,78,23) ;
                height: 1100px;
                width: 60% ;
                background-color: rgba(35,75,80,0.4);
                position: relative;
                left: 22%;
                right: 20% ; 
            }
            #menu_gauche{
               /* float: top ;*/
                width: 22% ;
                border: 2px solid rgb(45,178,23);
                height: 1100px ;
                background-color: rgba(95,45,80,0.4);
                position: absolute ;
                top: 0px;
                padding: 0px;
            }
            #menu_gauche ul{
                list-style :none;
            }
            #perso_cv{
                width : 25%;
                border : 1px solid brown ;
                height : 1000px;
                float : left; 
                padding : 18px;
            }
            #corps_cv{
                width : 64%;
                float : right;
                border : 1px solid purple ;
                height : 1000px;
                padding : 18px;
            }
            .perso{
                border-bottom : 1px solid rgba(12,13,14,0.5);
                margin-bottom : 8px;
            }
            .corps{
                border-bottom : 1px solid rgba(12,13,14,0.5)
            }
            footer{
                position : relative ;
            }

        </style>
    </head>
    
    <body>
        <header>
            <?php include('entete_de_page.php') ?> <!-- bloc d'entête à inclure -->
        </header>
        <div id="banniere"> <!-- photo au dessous de la ligne de menu -->
           <!-- <img src="images/image.jpg"> -->
        </div>
        <div id="wrapper"> <!-- emballage de toute la partie entière du contenu -->
            <div id="cours"> <!-- emballage du bloc de présentation du main content de la page -->
                <div id='perso_cv'> <!-- emballage contenant la partie ma photo et les détails personnels du cv -->
                    <div class='perso'> ma photo </div><br><br><br>
                    <div class='perso'> Mes détails personnels </div>
                    <h5>Nom : </h5>
                    <p>NTONGA BINENG </p><br>
                    <h5>Prenom : </h5>
                    <p>Pascal Pierre </p><br>
                    <h5>Adresse e-mail : </h5>
                    <p>ntongabineng@gmail.com </p><br>
                    <h5>Numéro de téléphone : </h5>
                    <p> 0 681 107 14 723 </p><br>
                    <h5>Adresse : </h5>
                    <p>Schönburgstrasse 5 <br>1040 Vienne <br>Autriche </p><br>
                    <h5>LinkedIn : </h5>
                    <p><a href='linkedin.com/in/pierre-bineng-01a1aa147'>linkedin.com/in/pierre-bineng-01a1aa147</a></p><br>
                    <div class='perso'> Mes langues parlées </div>
                    <p>Français :  <input type='radio' checked='checked' /> <input type='radio' checked='checked'> <input type='radio' checked='checked' /> <input type='radio' checked='checked' /> <input type='radio' checked='checked' /></p><br>
                    <p>Anglais : <input type='radio' checked='checked' /> <input type='radio' checked='checked' /> <input type='radio' checked='checked' /> <input type='radio' /> <input type='radio'  /></p><br>
                    <p>Allemand : <input type='radio' checked='checked' /> <input type='radio' checked='checked' /> <input type='radio' checked='checked' /> <input type='radio'  /><input type='radio'  /></p><br>
                    <p>Espagnol : <input type='radio' checked='checked' /> <input type='radio' checked='checked' /> <input type='radio' /> <input type='radio' /> <input type='radio'  /></p><br>
                    <div class='perso'> Mes qualités </div><br><br><br>
                    <div class='perso'> Mes centres d'intérêt </div><br><br><br>
                </div>
                <div id='corps_cv'> 
                    <div class ='corps'><h3>PROFIL</h3></div><br><br><br><br><br><br>
                    <div class ='corps'><h3>EXPERIENCE PROFESSIONNELLE</h3></div><br><br><br><br><br><br>
                    <div class ='corps'><h3>FORMATION</h3></div><br><br><br><br><br>
                    <div class ='corps'><h3>COMPETENCES</h3></div><br><br><br><br><br><br>
                </div>
            </div>
            <div id="menu_gauche"> <!-- emballage contenant les liens des titres des cours -->
                <h3> MES COURS </h3>
                    <ul>
                        <li>
                            <h4>PHP</h4> <!-- les cours de php -->
                            <ul>
                                <li>Gestion des erreurs et des exceptions</li>
                                <li>La Programmation Orientée Objets en php</li>
                                <li>Les expressions régulières </li>
                                <li>Les filtres ent php</li>
                                <li>Les formulaires en php</li>
                            </ul>
                        </li>
                        <li>
                            <h4>MYSQL</h4> <!--les cours de Mysql -->
                            <ul>
                                <li>Connexion à mysql et création d'une BDD</li>
                                <li>Initiation à mysql, phpmyadmin et aux BDD</li>
                                <li>Insertion des données dans une BDD via php</li>
                                <li>Les fonctions sql</li>
                                <li>Les jointures sql</li>
                                <li>Mise à jour et suppression des données via php</li>
                                <li>Sélection des données dans une BDD via php</li>
                            </ul>
                        </li>
                    </ul>
            </div>
        </div>
        <footer>
            <?php include('pieds_de_page.php') ?> <!-- bloc de pieds de page à inclure -->
        </footer>
    </body>
</html>