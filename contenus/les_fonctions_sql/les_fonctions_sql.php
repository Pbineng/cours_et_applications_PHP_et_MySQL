<!DOCTYPE html>
<html>
    <head>
        <title>les fonctions usuelles en sql</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h2>LES FONCTIONS USUELLES EN SQL</h2>
        <p>Le sql comporte plusieurs fonctions qui permettent d'effectuer plusieurs opérations sur notre BDD et nos données. On distingue 2 grands types de fonctions en sql : </p>
        <ul>
            <li><strong>Les fonctions d'agrégat</strong> : qui retournent une seule valeur qui est calculée à partir des différentes valeurs dans une colonne (l'agrégation) </li>
            <li><strong>Les fonctions scalaires</strong> : qui travaillent sur chaque champ et retournent autant de resultats que de champs modifiés. </li>
        </ul>
        <h3>1- Les fonctions usuelles d'agrégat</h3>
        <p>Comme illustration nous allons nous reférer à notre BDD manipulée dans le chapitre précédent.</p>
        <h4>1.1- la fonction sql AVG</h4>
        <p>Elle retourne la moyenne de plusieurs nombres. Supposons qu'on veule avoir la moyenne de tous les abonnés de notre BDD :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $moy = " 
            SELECT AVG(age) FROM abonnes
            ";
            
            $requete = $connexion->prepare($moy);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi <br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h4>1.2- La fonction Count</h4>
        <p>Elle permet de compter le nombre de valeurs. On distingue : </p>
        <ul>
            <li>COUNT(*) : pour compter toutes les entrées de la table : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT COUNT(*) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi <br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
            </li>
            <li>COUNT(DISTINCT) : pour compter toutes les entrées de la table sans repéter les mêmes valeurs en fonction d'une colonne : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT COUNT(DISTINCT age) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT COUNT(DISTINCT prenom) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
            </li>
        </ul>
        <h4>1.3- Les fonctions MAX(...) et MIN(...) </h4>
        <p>Pour déterminer les valeurs maximale et minimale d'une colonne :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT MAX(age) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT MIN(age) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h4>1.4- La fonction SUM(...) </h4>
        <p>Permet de faire la somme des données d'une colonne :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT SUM(age) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h3>2- Les fonctions scalaires</h3>
        <h4>2.1- Les fonctions UCASE(...) et LCASE(...) </h4>
        <p>Permettent de convertir un resultat en majuscule et en minuscule respectivement :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT UCASE(prenom) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT LCASE(prenom) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h4>2.2- La fonction LENGTH(...) </h4>
        <p>Elle permet de compter le nombre d'octets correspondant à chaque champ de la colonne. les cédilles et accents comptent pour 2 :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT LENGTH(prenom) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h4>2.3- La fonction ROUND(..., ...) </h4>
        <p>Elle permet d'afficher les valeurs (décimales) d'une colonne en les arrondissant(à l'unité inférieure) en fonction de la valeur du 2e argument.</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT ROUND(dons,1) FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h4>2.2- La fonction ..., NOW() </h4>
        <p>Elle permet l'entrée ou la récupération de nouvelles entrée avec la date actuelle : </p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT prenom, NOW() FROM abonnes
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <h4>3- Quelques nouveaux critères de sélection</h4>
        <ul>
            <li><strong>GROUP BY</strong> : qui s'utilise avec les fonctions d'agregat. Elle permet d'étendre les possibilités de ces fonctions en renvoyant des sous-resultats selon un critère par exemple selection des dons en fonctions des âges. <br>
            <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT AVG(dons), age FROM abonnes GROUP BY age
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
            <p>On peut davantage combiner les critères excepté WHERE, on utilisera HAVING à la place :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT AVG(dons),age FROM abonnes GROUP BY age HAVING AVG(dons)>6
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
        <p>Par contre on peut utiliser le WHERE dans ce cas plutôt avant GROUP BY </p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $count = " 
            SELECT AVG(dons),age FROM abonnes WHERE nom!='Ntonga' GROUP BY age HAVING AVG(dons)>6
            ";
            
            $requete = $connexion->prepare($count);
            $requete->execute();
            $resultat=$requete->fetchAll();
            echo "le traitement de votre requete a réussi :<br><pre>";
            print_r($resultat);
            echo "</pre><br>";
        }
        catch(PDOException $e){
            echo "le traitement de votre requete a échoué " .$e->getMESSAGE();
        }
        ?>
            </li>
        </ul>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>