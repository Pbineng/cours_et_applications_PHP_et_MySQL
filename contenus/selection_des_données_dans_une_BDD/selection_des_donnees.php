<!DOCTYPE html>
<html>
    <head>
        <title>SELECTION DES DONNEES DANS UNE BDD</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h2>SELECTION DES DONNEES DANS UNE BDD</h2>
        <p>Pour effectuer des actions dans une BDD à partir de la page Php, la première étape est d'abord de créer ou d'établir la connexion à la BDD concernée, ensuite  on déclare l'instruction que l'on souhaite réaliser accompgnée du nom de la table.</p>
        <h4>1- Sélection de toutes les données de la table</h4>
        Illustration : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $requete=$connexion->prepare("
            SELECT * FROM visiteurs_test3
            ");
            $requete->execute();
            $resultat=$requete->fetchall();
            echo "<strong>la sélection de toutes les données a réussi !</strong><br><pre>";
            print_r($resultat);
            echo "</pre>";
        }
        catch(PDOException $e){
            echo "<strong>la sélection des données a échoué</strong>" .$e->getMESSAGE(). "<br>";
        }
        ?>
        <h4>2- Sélection de certaines données</h4>
        <p>On peut être amené à effectuer une sélection précise d'un certain type de données. On devra dans ce cas utiliser les <strong>critères de sélection</strong> en fonction desquelles on établir la liste de données.</p>
        Illustration : Pour mieux illustrer, on va ajouter via la page php 2 nouvelles colonnes précisant le sexe et l'âge des différentes entrées de notre table "visiteurs_test3" dans notre BDD "bd_test3"<br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $requete1=("
            ALTER TABLE visiteurs_test3 ADD sexe VARCHAR(10)
            ");
            $requete2=("
            ALTER TABLE visiteurs_test3 ADD age INT(10)
            ");
            $connexion->exec($requete1);
            $connexion->exec($requete2);
            echo "<strong>nouvelles colonnes 'sexe' et 'age' créées !</strong><br>";
        }
        catch(PDOException $e){
            echo "la création de la nouvelle colonne a échoué" .$e->getMESSAGE();
        }
        ?>
        <h5>selectionner uniquement les prénoms :</h5>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $requete=$connexion->prepare("
            SELECT prenom FROM visiteurs_test3
            ");
            
            $requete->execute();
            $resultat=$requete->fetchall();
            
            echo"<strong>vous avez sélectionné les 'prénoms' de la BDD </strong> !<br><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"la sélection des données a échoué " .$e->getMESSAGE();
        }
        ?>
        <h5>Critères pour des cibles plus précises</h5>
        <p>Il s'agit notamment de : <strong>WHERE  AND  ORDER BY  LIMIT</strong>. Il est possible de combiner plusieurs critères lors des sélections. Le défi sera de les ordonner comme il se doit, autrement cela ne marchera pas. </p>
        <ul>
            <li><strong>WHERE</strong> : pour sélectionner par exemple les entrées de sexe Masculin ; SELECT prenom FROM visiteurs_test3 WHERE sexe="Masculin" </li>
            <li><strong>AND</strong> : SELECT prenom FROM visiteurs_test3 WHERE sexe="M" AND age inférieur 26 </li>
            <li><strong>ORDER BY</strong> :SELECT visiteurs_test3 ORDER BY age   (ordre d'âge croissant)    SELECT visiteurs_test3 ORDER BY age Desc  (ordre d'âge décroissant)  </li>
            <li><strong>LIMIT</strong> : permet de sélectionner les données à partir d'un certain rang ; SELECT prenom FROM visiteurs_test3 LIMIT 0,3    (3 entrées à partir de la première) </li>
            <li><strong>Combiner plusieurs critères</strong> : SELECT prenom FROM visiteurs_test3 ORDER BY age Desc LIMIT 1,3 </li>
        </ul>
        
        
        
        
        
        
        
        
    </body>
</html>