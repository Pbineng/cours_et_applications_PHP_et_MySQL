<?php
    session_start() ;
    if(isset ($_SESSION['counter'])){
        $_SESSION['counter']++ ; //on définit une simple progression pour chaque fois que la page est chargée.
    }
    else{
        $_SESSION['counter'] = 1 ;
    }
?>

<?php 
    setcookie('cook1','valeur_cookie', time()+3600,'/') ;
    setcookie('cookies-notes','', time()-3600,'/') ;
    setcookie('cook1','valeur_cookie-mod', time()+10000,'/') ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
    <title>Online note-saver</title>
</head>
<body>
    <header>
        <?php
            include 'header.php' ;
        ?>
    </header>
    <div id="main-content">
        <div id="new-note">
            <h2>Rediger une nouvelle Note</h2>
            <div id="new-note-form">
                <form method="POST" action="notes.php">
                    <label for="autor">Auteur :</label>
                    <input type="text" name="autor" id="autor" required><span class="warm"></span> <br>
                    <label for="title">Titre : </label>
                    <input type="text" name="title" id="title"><br>
                    <label for="note">Note : </label>
                    <textarea id="note" name="note" ></textarea><br>
                    <input type="submit" id="save" value="Enregistrer" >
                </form>
            </div>
        </div>
        <div id="previews-note-table">
            <h2>Notes précédentes</h2>
            <table>
                <thead>
                    <tr>
                        <th><strong>Dates</strong></th>
                        <th><strong>Auteur</strong></th>
                        <th><strong>Titres</strong></th>
                        <th><strong>Notes</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>22/5/21</td>
                        <td>moi même</td>
                        <td>gratitude</td>
                        <td>aujourd'hui,...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <p>Vous avez visité cette page : <strong><?php echo $_SESSION['counter'] ; ?></stron> fois</p>
        <?php
            include 'footer.php' ;
        ?>
    </footer>
</body>
</html>