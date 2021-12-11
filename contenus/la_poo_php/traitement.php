<!DOCTYPE html>
<html>
    <head>
        <title>resultat du jeu </title>
        <meta charset="utf-8">
        <style>
        *{
                padding: 10px;
                background-color: rgba(150,70,110,0.03);
            }
            body{
                margin: 10px 20% 0px 20%; 
            }
        
        
        </style>
    </head>
    
    <body>
        <h2>Voici le resultat de votre jeu :</h2>
         
        
        
        <?php
       /* $nom = $annee = $mois = $jour = '';
        
        function securisation($donnee){
            $donnee = trim($donnee);
            $donnee = stripslashes($donnee);
            $donnee = strip_tags($donnee);
            
            return $donnee;
        }
        
        $nom = securisation($_POST['nom']);
        $annee = securisation($_POST['annee']);
        $mois = securisation($_POST['mois']);
        $jour = securisation($_POST['jour']);
        
        echo $nom. "<br> " .$annee. " <br>" .$mois. "<br> " .$jour. "<br>";
        */
        ?>
        <br><br><br>
        <?php
        $sex = $_POST['sexe'];
        $nom = '';
        
        function securisation($donnee){
            $donnee = trim($donnee);
            $donnee = stripslashes($donnee);
            $donnee = strip_tags($donnee);
            
            return $donnee;
        }
        
        $nom = securisation($_POST['nom']);
        
        if ($sex =='masc'){
            
            include_once('nom.class.php');
            $nomin = new Noms;
            
            
            $nomin -> set_nomination($GLOBALS['nom']);
            $monsieur = $nomin ->get_nomination();
            $longe = $nomin -> set_clefs ;
            
            
            
            echo '<br><br>Bienvenu Monsieur ' .$monsieur. ' et ' .$longe. '<br>';
        }
        else if ($sex =='fem'){
            
           include_once('nom.class.php');
            $nomin = new Noms;
            
            $nomin -> set_nomination($GLOBALS['nom']);
            $madame = $nomin ->get_nomination();
            
            echo '<br><br>Bienvenu Madame ' .$madame. '<br>';
        }
        ?>
        
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>