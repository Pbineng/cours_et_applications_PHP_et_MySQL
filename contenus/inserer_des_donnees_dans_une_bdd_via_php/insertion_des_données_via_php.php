<!DOCTYPE html>
<html>
    <head>
        <title>insertion des données dans une BDD depuis le script php</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h2>INSERTION DES DONNEES DANS UNE BDD DEPUIS LE PHP</h2>
        <h3>Introduction</h3>
        <p>Dans la réalité, c'est les visiteurs qui remplissent eux-mêmes leurs informations à travers les formulaires, qui migreront dans la BDD. Cela dit, il peut arriver que les utilisateurs entrent des caractères de sorte que notre code se trouve modifié afin de provoquer des effets inattendus. Pour sécuriser nos formulaires selon et hormis les méthodes de sécurisation vues précédemment, on sera amené à <strong>préparer nos requêtes</strong>. Cette préparation consiste à préformater les requêtes afin que les riques d'injection SQL et de faille éventuelle soient minimes, ce qui conduira à une rapidité et efficacité d'exécution des requêtes. <br>
        Cette préparation peut se faire en 3 phases :</p>
        <ul>
            <li><strong>La préparation</strong> : qui consiste à créer une sorte de maquette</li>
            <li><strong>La compilation</strong> : qui consiste à l'analyse, la compilation et le stockage</li>
            <li><strong>L'exécution</strong> : Ici les données entrées par le visiteur sont exécutées.</li>
        </ul>
        <h4>1- Insertion de données sans mesure de sécurisation</h4>
        <p>Pour ce faire, on déclare tout d'abord la connexion à la BDD concernée, ensuite on déclare l'instruction d'insertion accompagnée du nom de la table concernée ainsi que les éléments et les valeurs à insérer.</p>
        Illustration :<br>
        *<strong>insertion d'une seule entrée composant la table :</strong><br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $insert = "INSERT INTO visiteurs_test3(nom,prenom,email) VALUES('Bineng','Pierre','pierre@hotmail.fr')";
            $connexion->exec($insert);
            echo "les valeurs: Bineng, Pierre, pierre@hotmail.fr ont bien été insérées !<br>";
        }
        catch(PDOException $e){
            echo "l'insertion des valeurs a échoué : " .$e->getMESSAGE(). "<br>";
        }
        ?>
        *<strong>insertion de 2 ou plusieurs entrées composant la table :</strong><br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $insert = "INSERT INTO visiteurs_test3(nom,prenom,email) VALUES('Bineng','Pierro','pierro@hotmail.fr'),('Ntonga','Pascal','pierr@hotmail.fr'),('Pierre','Pascal','pp@hotmail.fr'),('Pascal','Pierre','pepe@hotmail.fr')";
            
            $connexion->exec($insert);
            echo "les valeurs 4 entrées ont bien été insérées !<br>";
        }
        catch(PDOException $e){
            echo "l'insertion des valeurs a échoué : " .$e->getMESSAGE(). "<br>";
        }
        ?>
        <h4>2- Insertion des données avec les formulaires sécurisés(préformatés) </h4>
        <p>On peut utiliser la méthode <strong>bindparam</strong> en PDO pour lier une variable php à un marqueur donné, et les méthodes <strong>prepare</strong> et <strong>execute</strong> à la place de Exec.</p>
        Illustration : <br>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3",$login, $pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $requete = $connexion->prepare("
                INSERT INTO visiteurs_test3(nom,prenom,email) VALUES(:nom,:prenom,:email)"   //phase 1 : la préparation
            );
            
            $requete->bindparam(":nom",$nom);             //
            $requete->bindparam(":prenom",$prenom);       //phase 2 : la compilation et la liaison des marqueurs avec les données du visiteur
            $requete->bindparam(":email",$email);          //
            
            $nom = "PIERROT";
            $prenom = "PASCUAL";                        //rempliçage des informations par le visiteur
            $email = "pascual@pierrot.at";
            
            $requete->execute();                     //phase 3 : exécution de la requête avec le protocole de sécurisation
            echo "les valeurs PIERROT PASCUAL et pascual@pierrot.at ont bien été insérées <br>";
        }
        catch(PDOException $e){
            echo "l'insertion des valeurs a échoué " .$e->getMESSAGE(). "<br>";
        }
        
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>