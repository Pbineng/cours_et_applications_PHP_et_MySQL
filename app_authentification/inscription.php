<?php
    $message = " " ;

@$nom_i = $_POST['nom'] ;
@$prenom_i = $_POST['prenom'] ;
@$identifiant_i = $_POST['identifiant'] ;
@$pass_i = $_POST['pass'] ;
@$repass_i = $_POST['repass'] ;
@$valider_i = $_POST['valider'] ;

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
$valider = securisation($valider_i) ;
    if(isset($valider)){          //les conditions à vérifier lorsque l'id "valider" est enclenchée. Si l'une des conditions ci n'est vérifiée, l'action "valider" n'est complétée, et la div de l'id "message" affiche le message correspondant. Pour que l'action soit complétée, la div "message" doit être vide.
        if(empty($nom)) $message = "<li>Nom invalide !</li>" ;
        if(empty($prenom)) $message.= "<li>Prenom invalide !</li>" ;
        if(empty($identifiant)) $message.= "<li>Identifiant invalide !</li>" ;
        if(empty($pass)) $message.= "<li>Mot de passe invalide !</li>" ;
        if($pass != $repass) $message .= "<li>Mots de passe non identiques !</li>" ;
    }

    if(empty($message)){  //si aucune erreur n'est rencontrée, autrement dit l'évènement "submit" est complété, alors exécute ce code :
        
       
       
        // include("dblink.php") ;

        // $req = $connexion->prepare("select id from users where login=? limit 1") ;
        // $req->setFetchMode(PDO::FETCH_ASSOC) ;
        // $req->execute(array($identifiant)) ;

        // echo "liste des id récupérée <br><br>" ;

        // $tab = $req->fetchAll() ;
        // if(count($tab)>0){
        //     echo "<li>cet identifiant existe déjà</li>" ;
        // }
        // else{
        //     $ins = $connexion->prepare("insert into users(date,nom,prenom,identifiant,pass) values(now(),?,?,?,?)") ;
        //     $ins ->execute(array($nom,$prenom,$identifiant,md5($pass))) ;
        //     //header("location:connexion.php") ;
        // }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script scr="script.js" defer></script>
    <title>Inscription-</title>
</head>
<body>
    <header>
        <div class="acces">Inscription</div>
        <div class="deja"><a href="connexion.php">Déjà inscrit</a><br></div>
    </header>
    <div class="formulaire">
        <form method="POST" action="dblink.php" enctype="multipart/form-data" >  <!-- enctype spécifie la façon dont les données du formulaire seront encodées avant d'être envoyées dans le server-->
            
            <label for="nom" class="titre">Nom :</label><br>
            <input type="text" id="nom" class="champs" name="nom" ><br><br>
            <label for="prenom" class="titre">Prénom :</label><br>
            <input type="text" id="prenom" class="champs" name="prenom" ><br><br>
            <label for="identifiant" class="titre">Identifiant :</label><br>
            <input type="text" id="identifiant" class="champs" name="identifiant" ><br><br>
            <label for="pass" class="titre">Mot de passe :</label><br>
            <input type="password" id="pass" class="champs" name="pass" ><br><br>
            <label for="repass" class="titre">Confirmation du mot de passe :</label><br>
            <input type="password" name="repass" id="repass" class="champs" ><span class='erreur'></span><br><br>
            <input type="submit" id="valider" name="valider" class="champs" value="S'inscrire"><br><br>
        </form>
        

    </div>
    <footer class="footer">
        <?php if(!empty($message)){ ?>
            <div class="message"><?php echo $message ?></div>
        <?php } ?> 
    </footer>
</body>
</html>