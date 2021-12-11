<?php session_start() ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Formule d'inscription</title>
</head>
<body>
    <?php
        if(isset($_SESSION["email"])){
            echo " Vous êtes connecté en tant que : " .$_SESSION["email"]. "<br><br>";
        }
        else{
            ?>
            <form method="POST" action="login.php">
                <input type="email" id="email" class="champs" name="email" placeholder="entrez votre email" required><br><br>
                <input type="password" id="pass" class="champs" name="pass" placeholder="entrez votre mot de passe" required><br><br>
                <input type="submit" id="valider" class="champs" name="valider" value="s'inscrire">
            </form>
            <?php
        }
        ?>
    
    
    
</body>
</html>