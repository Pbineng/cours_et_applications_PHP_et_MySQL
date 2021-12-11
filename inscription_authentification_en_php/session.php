<?php
session_start() ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    <title>session ouverte</title>
</head>
<body>
    <header>
        <div class="acces">Espace privé</div>
        <div class="deja"><a href="deconnexion.php">Quitter la session </a></div>
    </header>
    <h1 id="bonjour">Bonjour <span id="utilisateur">NOM PRENOM </span></h1>
    
</body>
</html>