<?php
session_start() ;

$message = " " ;


@$identifiant_i = $_POST['identifiant'] ;
@$pass_i = $_POST['pass'] ;
@$valider_i = $_POST['valider'] ;

function securisation($data){
    $data = trim($data) ;
    $data = stripslashes($data) ;
    $data = strip_tags($data) ;
    return $data ;
}



$identifiant = securisation($identifiant_i) ;
$pass = securisation($pass_i) ;
$valider = securisation($valider_i) ;



    if(isset($valider)){          //les conditions à vérifier lorsque l'id "valider" est enclenchée. Si l'une des conditions ci n'est vérifiée, l'action "valider" n'est complétée, et la div de l'id "message" affiche le message correspondant. Pour que l'action soit complétée, la div "message" doit être vide.
        if(empty($identifiant)) $message.= "<li>Identifiant invalide !</li>" ;
        if(empty($pass)) $message.= "<li>Mot de passe invalide !</li>" ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>connexion</title>

</head>
<body>
    <header>
        <div class="acces">Connexion</div>
        <div class="deja"><a href="inscription.php">S'inscrire</a><br></div>
    </header>

    <div class="formulaire">
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="identifiant">Identifiant :</label><br>
            <input type="text" name="identifiant" id="identifiant" class="champs" ><br><br>
            <label for="pass">Mot de passe :</label><br>
            <input type="password" name="pass" id="pass" class="champs" ><br><br>
            <input type="submit" name="valider" id="valider" class="champs" value="Se connecter">

        </form>
    </div>
    <footer class="footer">
            <?php if(!empty($message)){ ?>
                <div class="message"><?php echo $message ?></div>
            <?php } ?> 
    </footer>
</body>
</html>