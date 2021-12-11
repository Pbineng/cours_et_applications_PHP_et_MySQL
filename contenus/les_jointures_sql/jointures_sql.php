<!DOCTYPE html>
<html>
    <head>
        <title>les jointures sql</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h2>LES JOINTURES SQL</h2><br>
        <p>Une BDD peut être composée de plusieurs tables relatives chacunes à un type de données précises par exemple la table des visiteurs, la table des abonnés standard, la table des abonnés Premium, la table des commentaires, etc... En fonction des besoins, on peut être amené à procéder aux analyses faisant intervenir plusieurs tables à la fois. On distingue 2 options permettant de créer des relations entre différentes tables :</p>
        <ul>
            <li><strong>Les jointures</strong></li>
            <li><strong>l'opérateur SQL UNION</strong></li>
        </ul>
        <h4>1- Les jointures</h4>
        <p>Elles permettent d'associer 2 tables afin de récupérer en une seule requête certaines informations dans chacune des tables. Afin d'exécuter cette option, il est nécessaire de créer déjà une <strong>liaison</strong> entre les tables concernées (2 tables peuvent être liées par une colonne comportant les données appartenant exactement à ces 2 tables; généralement la colonne id). On va analyser 4 types de jointures. Pour analyser, on supposer avoir les tables suivante : "table des utilisateurs", "table des commentaires" et évidemment aucune table n'existe pour le public qui n'intervient pas;  </p>
        <ul>
            <li><strong>INNER JOIN</strong>(jointure interne) : utilisée s'il y a correspondance dans les 2 tables (uniquement les utilisateurs et leurs commentaires) </li>
            <li><strong>FULL OUTER JOIN</strong>(jointure externe) : utilisée même s'il y a pas correspondance entre les 2 tables (l'ensemble des utilisateurs et l'ensemble des commentaires) </li>
            <li><strong>LEFT JOIN</strong>(jointure gauche, externe) : ensembles des utilisateurs ainsi que les commentaires des utilisateurs qui ont commenté </li>
            <li><strong>RIGHT JOIN</strong>(jointure droite, externe) : ensemble des commentaires ainsi que les utilisateurs qui ont commenté </li>
        </ul>
        Illustrations : <br>
        <h5>Inner join :</h5>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $joint_int = "
            SELECT abonnes.prenom, commentaires_test3.commentaires
            FROM abonnes
            INNER JOIN commentaires_test3
            ON abonnes.id = commentaires_test3.id_abon
            ";
            
            $requete=$connexion->prepare($joint_int);
            $requete->execute();
            
            $resultat = $requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        <p>2 astuces importantes : On peut utiliser des Alias pour raccourci les noms de nos tables(ils permettront notamment au code d'être plus lisible et clair surtout s'il existe des noms de table longs ou ambigus). On peut aussi utiliser les critères de tri pour mieux préciser notre cible, par exemple on veut extraire de la liste ci-dessus uniquement les commentaires de "Pierre" :</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $joint_int = "
            SELECT Ab.prenom, cmt3.commentaires
            FROM abonnes AS Ab
            INNER JOIN commentaires_test3 AS cmt3
            ON Ab.id = cmt3.id_abon
            WHERE Ab.prenom='pierre'
            ";
            
            $requete=$connexion->prepare($joint_int);
            $requete->execute();
            
            $resultat = $requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        
        <h5>left join </h5>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $join_left=" 
            SELECT Ab.prenom, Cmt3.commentaires
            FROM abonnes AS Ab
            LEFT JOIN commentaires_test3 AS Cmt3
            ON Ab.id = Cmt3.id_abon
            ";
            
            $requete=$connexion->prepare($join_left);
            $requete->execute();
            
            $resultat=$requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        <h5>join right</h5>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $join_right = " 
            SELECT Ab.prenom, Cmt3.commentaires
            FROM abonnes AS Ab
            RIGHT JOIN commentaires_test3 AS Cmt3
            ON Ab.id = cmt3.id_abon
            ";
            
            $requete=$connexion->prepare($join_right);
            $requete->execute();
            
            $resultat = $requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        
        
        
        
        <h5>full outer join</h5>
        <?php
       /* $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $join_full = " 
            SELECT Ab.prenom, Cmt3.commentaires
            FROM abonnes AS Ab
            FULL OUTER JOIN commentaires_test3 AS Cmt3
            ON Ab.id = Cmt3.id_abon
            ";
            
            $requete=$connexion->prepare($join_full);
            $requete->execute();
            
            $resultat=$requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }*/
        ?>
        <p>Le Mysql ne supporte pas ce type de jointure. l'option de l'UNION permettra de combler ce souci.</p>
        <h4>l'UNION</h4>
        <p>L'UNION permet de combiner les resultats de plusieurs requêtes en une seule. Pour qu'elle soit réalisée, on va utiliser 2 SELECT correspondant à chacune des tables à unir; le nombre de colonnes pour la première table table doit correspondre à celui de la deuxième table.  </p>
        <h5>UNION</h5>
        <p>On fait une union de l'ensemble des abonnés et des commentaires.</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $union=" 
            SELECT prenom FROM abonnes
            UNION
            SELECT commentaires FROM commentaires_test3
            ";
            
            $requete=$connexion->prepare($union);
            $requete->execute();
            $resultat=$requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        <p>Le procédé ci-dessus ne permet d'afficher qu'une seule occurence pour les entrées comportant plusieurs occurences. Pour afficher la totalité des occurences on va remplacer UNION par UNION ALL</p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $union=" 
            SELECT prenom FROM abonnes
            UNION ALL
            SELECT commentaires FROM commentaires_test3
            ";
            
            $requete=$connexion->prepare($union);
            $requete->execute();
            $resultat=$requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        <p>Finalement notre <strong>FULL OUTER JOIN</strong> va se faire par union du LEFT JOIN et du RIGHT JOIN : </p>
        <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        
        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=db_test3;charset=utf8",$login,$pass);
            $connexion->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $union=" 
            SELECT Ab.prenom, Cmt3.commentaires
            FROM abonnes AS Ab
            LEFT JOIN commentaires_test3 AS Cmt3
            ON Ab.id = Cmt3.id_abon
            UNION
            SELECT Ab.prenom, Cmt3.commentaires
            FROM abonnes AS Ab
            RIGHT JOIN commentaires_test3 AS Cmt3
            ON Ab.id = Cmt3.id_abon
            ";
            
            $requete=$connexion->prepare($union);
            $requete->execute();
            $resultat=$requete->fetchAll();
            
            echo"<strong>le traitement de votre requête a réussi :</strong><pre>";
            print_r($resultat);
            echo"</pre><br>";
        }
        catch(PDOException $e){
            echo"le traitement de votre requête a échoué" .$e->getMESSAGE();
        }
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>