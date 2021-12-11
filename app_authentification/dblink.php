<?php
$serveur = 'localhost' ;
$log = 'root' ;
$mdp = '' ;

try{
    $connexion = new PDO("mysql:host=$serveur;dbname=app_authen",$log,$mdp) ;
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;

    echo "connexion réussie <br><br>" ;

    $requete = $connexion->prepare(
        "INSERT INTO users(nom,prenom,identifiant,pass)
        VALUES (:nom,:prenom,:identifiant,:pass)"
    );
    $requete->bindparam(':nom',$nom) ;
    $requete->bindparam(':prenom',$prenom) ;
    $requete->bindparam(':identifiant',$identifiant) ;
    $requete->bindparam(':pass',$pass) ;

    $requete->execute() ;
    echo "données insérées " ;
}
catch(PDOException $e){
   echo "données pas insérées " .$e->getMessage() ; 
}


?>