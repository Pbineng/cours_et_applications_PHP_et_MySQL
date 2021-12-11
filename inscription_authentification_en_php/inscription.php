

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
        <div class="deja"><a href="authentification.html">Déjà inscrit</a><br></div>
    </header>
    <div class="formulaire">
        <form method="POST" action="traitement_auth.php" >
            
            <label for="nom" class="titre">Nom :</label><br>
            <input type="text" id="nom" class="champs" name="nom" required><br><br>
            <label for="prenom" class="titre">Prénom :</label><br>
            <input type="text" id="prenom" class="champs" name="prenom" required><br><br>
            <label for="identifiant" class="titre">Identifiant :</label><br>
            <input type="text" id="identifiant" class="champs" name="identifiant" required><br><br>
            <label for="pass" class="titre">Mot de passe :</label><br>
            <input type="password" id="pass" class="champs" name="pass" required><br><br>
            <label for="repass" class="titre">Confirmation du mot de passe :</label><br>
            <input type="password" name="repass" id="repass" class="champs" required><span class='erreur'></span><br><br>
            <input type="submit" id="valider" name="valider" class="champs" value="S'inscrire"><br><br>
        </form>
        <?php 
            if(!empty($message)) { 
        ?>
        <div class="message">
        <?php 
        echo $message 
        ?>
        </div>
        <?php
        }
        ?>

    </div>
    
</body>
</html>