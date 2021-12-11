<?php

$nom = $prenom = $identifiant = $pass = $repass = '' ;
$eMessage = '' ;
$serveur = 'localhost' ;
$log = 'root' ;
$mdp = '' ;

@$nom_i = $_POST['nom'] ;
@$prenom_i = $_POST['prenom'] ;
@$identifiant_i = $_POST['identifiant'] ;
@$pass_i = $_POST['pass'] ;
@$repass_i = $_POST['repass'] ;

function securisation($data){
    $data = trim($data) ;
    $data = stripslashes($data) ;
    $data = strip_tags($data) ;
    return $data ;
}


$nom = securisation($nom_i) ;
$prenom = securisation($prenom_i) ;
$identifiant = securisation($identifiant_i) ;
$pass = securisation($pass_i) ;
$repass = securisation($repass_i) ; 


try{
    $connexion = new PDO("mysql:host=$serveur;dbname=authentification_php",$log,$mdp) ;
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;

    $requete = $connexion->prepare(
        "INSERT INTO users(nom,prenom,identifiant,pass)
        VALUES (:nom,:prenom,:identifiant,:pass)"
    );
    $requete->bindparam(':nom',$nom) ;
    $requete->bindparam(':prenom',$prenom) ;
    $requete->bindparam(':identifiant',$identifiant) ;
    $requete->bindparam(':pass',$pass) ;

    $requete->execute() ;
}
catch(PDOException $e){
    echo "les données n'ont pas été enregistrées " .$e->getMessage(). "<br><br>" ;
}
//VERIFIER L'UNICITE DU LOGIN :
$req = $connexion->prepare("select id from users where identifiant=? limit 1") ;
$req->setFetchMode(PDO::FETCH_ASSOC) ;
$req->execute(array($identifiant)) ;
$tab = $req->fetchAll() ;
if(count($tab)>0){
    echo "Cette identifiant existe déjà. <br><br> cliquez sur ce bouton pour recommencer <br>" ;
}
else{
    $ins=$connexion->prepare("insert into users(date,nom,prenom,identifiant,pass)  Values(now(),?,?,?,?) ") ;
    $ins->execute(array($nom,$prenom,$identifiant,md5($pass))) ;
    header("location:authentification.html") ;
}
?>