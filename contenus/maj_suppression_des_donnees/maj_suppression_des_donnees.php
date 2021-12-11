<!DOCTYPE html>
<html>
    <head>
        <title>mise à jour et suppression des données dans une BDD</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h2>MISE A JOUR ET SUPPRESSION DES DONNEES DANS UNE BDD</h2>
        <p>On peut être amené à mettre à jour les données de notre BDD ou simplement à en supprimer depuis la page Php. l'établissement d'une connexion à la BDD concernée est préliminaire.</p>
        <h4>MàJ de la donnée en utilisant <strong>UPDATE</strong></h4>
        Illustration : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $modif="UPDATE visiteurs_test3 SET age=27 WHERE id=9";
            
            $requete=$connexion->prepare($modif);
            $requete->execute();
            echo "les informations ont bien été mises à jour !";
        }
        catch(PDOException $e){
            echo "mise à jour échouée" .$e->getMESSAGE();
        }
        ?>
        <h4>Suppression de données</h4>
        <p>Une fois les données supprimées, il n'est pas possible de les rappeler.</p>
        Illustration :<br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $supp = "DELETE FROM visiteurs_test3 WHERE id=14";
            
            $requete=$connexion->prepare($supp);
            $requete->execute();
            
            echo "l'entrée dont l'id=14 a bien été supprimée !";
        }
        catch(PDOException $e){
            echo "la suppression de donnée(s) a échouée" .$e->getMESSAGE();
        }
        
        ?>
        <p>Pour supprimer toute une colonne entière, on utilise la syntaxe : $supp="ALTER TABLE visiteurs_test3 DROP age" </p>
        <p>Pour supprimer toute une table entière, on utilise la syntaxe : $supp="DROP TABLE visiteurs_test3" </p>
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>