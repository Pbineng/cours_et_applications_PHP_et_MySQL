<!DOCTYPE html>
<html>
    <head>
        <title>connexion à MySQL et création d'une BDD</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>CONNEXION A MySQL ET CREATION D'UNE BDD</h1>
        <h3>Introduction</h3>
        <p>Il existe 2 extensions PhP pour Se connecter à MySQL depuis PhP. </p>
        <ul>
            <li>soit avec <strong>MySQL i</strong> </li>
            <li>soit avec <strong>PDO</strong>(Php Data Object) qui est donc une extension Orienté Objet </li>
        </ul>
        <p>Ces 2 extensions sont sensées déjà être installées et activées sur le server local (Wamp dans notre cas).<br><br>
        PDO est conseillé car il fonctionne avec 12 systèmes de gestion de BDD alors que MySQL i ne fonctionne qu'avec le MySQL.</p>
        <h4>1- Etablir une connexion avec MySQL</h4>
        <p>Ce procédé requiert 4 informations : </p>
        <ul>
            <li>le nom de l'hôte (en local dans notre cas ce sera donc localhost) </li>
            <li>le nom de la BDD où on souhaite se connecter</li>
            <li>le nom d'utilisateur, en principe en local pour wamp ce sera ROOT</li>
            <li>et le mot de passe : pour wamp le champs peut rester vide.</li>
        </ul>
        Illustration : <br>
        <?php
        $server = "localhost";
        $login = "root";
        $pass = "";
        
        $connexion = new PDO("mysql:host=$server;dbname=ma_bdd_initiale", $login, $pass);  
        echo "<strong>connexion à la BDD 'ma_bdd_initiale' réussie !</strong><br>"; 
        ?>
        <p>Pour être plus professionnel, on ne s'arrêtera pas à ne déclarer que les instructions de connexion mais on devrait <strong>tester notre connexion</strong> pour vérifier s'il y a des erreurs ou pas. Le test fera appel à la POO. Pour rappel on ne déclare jamais un <strong>try</strong> sans un <strong>catch</strong> par la suite.</p>
        Illustration : <br><br>
        <?php
        $server = "localhost";
        $login = "root";
        $pass = "";
        
        try{
        $connexion = new PDO("mysql:host=$server;dbname=ma_bdd_initiale", $login, $pass);
        $connexion -> setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<strong>nouvelle connexion à la BDD 'ma_bdd_initiale' réussie !</strong><br>";
        }
        catch(PDOException $e){
            echo "échec de la connexion : <strong>" .$e->getMESSAGE(). "</strong><br>";
        }
        ?>
        <h4>2- Création d'une BDD à partir du script php</h4>
        <p>Il est possible de créer une BDD sur la page php sans toutefois passer par le phpmyadmin. Pour ce faire, on va réécrire le code de connexion sans déclarer un nom de BDD(dbname), ensuite on code en SQL pour envoyer le code à Mysql. On va donc ajouter une 3e ligne dans le "Try" pour l'instruction de création de BDD accompagnée du nom de la BDD. </p>
        Illustration : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connex = new PDO("mysql:host=$serveur;dbname=", $login, $pass);
            $connex->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connex->exec("CREATE DATABASE db_test3");
       
            echo "<strong>nouvelle base de données nommée 'db_test3' créée !</strong><br>";
        }
        catch(PDOException $e){
            echo "<strong>échec de création de la nouvelle base de données </strong><br>" .$e->getMESSAGE(). "<br>" ;
        }
        ?>
        <p>Il est également possible d'ajouter des lignes et des colonnes à une BDD depuis le script php. Pour ce faire on va déclarer la connexion à la BDD concernée en ajoutant une 3e ligne déclarant l'instruction de création de table accompagnée du nom de la table. </p>
        Illustration : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connect = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connect->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $tablesql = "CREATE TABLE visiteurs_test3(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nom VARCHAR(50),
                prenom VARCHAR(50),
                email VARCHAR(70)
            )";
            
            $connect->exec($tablesql);
            echo "<strong>nouvelle table 'visiteurs_test3' créée ! </strong>";
        }
        catch(PDOException $e){
            echo "<strong>échec de création de la nouvelle table 'visiteurs_test3' </strong>" .$e->getMESSAGE(). "<br>";
        }
        
        ?>
        
    </body>
</html>