<!DOCTYPE html>
<html>
    <head>
        <title>les formulaires en php</title>
        <meta charset="utf-8">
        <style>
            *{
                padding: 10px;
                background-color: rgba(20,60,80,0.05);
            }
            textarea{
                width: 400px;
                height: 300px;
                border-radius: 5px;
            }
            form{
               /* display: block;*/
                position: relative;
                margin: 0px 30% 0px 30%;
                float: none;
            }
            input{
                border-radius: 3px;
            }
            .rest{
                position: relative;
                font-style: italic;
                float: right;
                margin-right: 60px;
            }
            footer{
                height: 90px;
                background-color: rgba(25,25,25,0.9);
                position: relative;
                color: orangered;
                padding: 60px 45% 0px 45%;
                margin-top: 60px;
                
            }
        
        </style>
    </head>
    
    <body>
        <h2>LES FORMULAIRES EN PHP</h2>
        <p>L'un des intérêts des formulaires est de nous permettre d'interagir avec nos visiteurs. Les formulaires peuvent nous permettre de collecter les données personnelles des utilisateurs, leurs commentaires, avis, etc...<br>
        En général, lorsqu'il s'agit des formulaires, on est amené à créer une page supplémentaire qui servira de traitement de données recoltées dans dans notre fichier principal. Il est conseillé d'utiliser la méthode 'POST' pour le traitement des données.<br>
        Le lien entre les 2 pages concernant les formulaires est la méthode de traitement et les 'id' imputées à chaque élément constitutif du formulaire, inscrites précisement dans les input.</p>
        <p><strong>Illustration :</strong> On veut collecter les informations personnelles des internautes (nom, prénom, e-mail, tél), ainsi que leurs avis sur un produit particulier :</p><br>
        <form method="post" action="traitement.php">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" maxlength="30" required><br><br>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" maxlength="30" required><br><br>
            <label for="email">Adresse e-mail : </label>
            <input type="email" id="email" name="email" maxlength="30" required><br><br>
            <label for="tel">Tél : </label>
            <input type="tel" id="tel" name="tel" min="11"><br><br>
            <textarea name="avis" id="avis" maxlength="150" placeholder="Quel est votre avis sur le nouveau produit ?"></textarea><br><br>
            <button type="submit">OK</button>
        </form>
        <p class="rest">Merci de nous faire confiance, le meilleur reste à venir !</p>
        <footer>La passion !</footer>
    </body>
</html>