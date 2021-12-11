<!DOCTYPE html>
<html>
    <head>
        <title>recapitulatif de vos informations </title>
        <meta charset="utf-8">
        <style>
            *{
                padding: 20px;
                background-color: rgba(80,20,110,0.05)
            }
            body{
                position: absolute;
                left: 10%;
                right: 10%;
            }
        </style>
    </head>
    
    <body>
        <h3>Voici le recapitulatif de vos informations et de votre avis :</h3>
        <?php
        echo 'Vous vous appelez <strong>' .($_POST['prenom']). '</strong>  <strong>' .($_POST['nom']). '</strong> et votre addresse e-mail est : <strong>' .($_POST['email']). '</strong><br> Votre avis : ' .$_POST['avis']. '<br><br>';
        
        ?>
        <p>Vous voulez rectifier quelque chose ? cliquez <a href="les_formulaires_en_php.php"><strong>ici</strong></a>. </p> <br><br><br><br><br>
        <h4>MES TESTS :</h4>
        <p>1- sans sécurisation (vulnérable) ou uniquement avec les contraintes maxlenght et required de html </p>
        <?php
        echo 'Vous vous appelez <strong>' .($_POST['prenom']). '</strong>  <strong>' .($_POST['nom']). '</strong> et votre addresse e-mail est : <strong>' .($_POST['email']). '</strong><br> Votre avis : ' .$_POST['avis']. '<br><br>';
        ?>
        <br><br><br><br><br>
        <p>2- avec l'attribut html htmlspecialchars($_POST['variable ou donnée']) : l'utilisateur voit les caractères injectés </p>
        <?php
        echo 'Vous vous appelez <strong>' .htmlspecialchars($_POST['prenom']). '</strong>  <strong>' .htmlspecialchars($_POST['nom']). '</strong> et votre addresse e-mail est : <strong>' .htmlspecialchars($_POST['email']). '</strong><br> Votre avis : ' .htmlspecialchars($_POST['avis']). '<br><br>';
        ?>
        <br><br><br><br><br>
        <p>3- avec l'attribut strip_tags($_POST['variable ou donnée']) : l'utilisateur ne voit pas les caractères injectés </p>
        <?php
        echo 'Vous vous appelez <strong>' .strip_tags($_POST['prenom']). '</strong>  <strong>' .strip_tags($_POST['nom']). '</strong> et votre addresse e-mail est : <strong>' .strip_tags($_POST['email']). '</strong><br> Votre avis : ' .strip_tags($_POST['avis']). '<br><br>';
        ?>
        <br><br><br><br><br>
        <p>4- avec l'attribut trim($_POST['variable ou donnée']) : qui supprime certains caractères et espaces injectés </p>
        <?php
        echo 'Vous vous appelez <strong>' .trim($_POST['prenom']). '</strong>  <strong>' .trim($_POST['nom']). '</strong> et votre addresse e-mail est : <strong>' .trim($_POST['email']). '</strong><br> Votre avis : ' .trim($_POST['avis']). '<br><br>';
        ?>
        <br><br><br><br><br>
        <p>5- avec l'attribut stripslashes($_POST['variable ou donnée']) : pour éviter l'effet des antislashes visant à passer outre les barrières du code </p>
        <?php
        echo 'Vous vous appelez <strong>' .stripslashes($_POST['prenom']). '</strong>  <strong>' .stripslashes($_POST['nom']). '</strong> et votre addresse e-mail est : <strong>' .stripslashes($_POST['email']). '</strong><br> Votre avis : ' .stripslashes($_POST['avis']). '<br><br>';
        ?>
        <br><br><br><br><br>
        <p>6- sécurisation à partir d'une fonction maison réunissant les techniques trim, strips_tags et stripslashes</p>
        <?php
        $prenom = $nom = $email = $tel = $avis = '';
        
        function securisation($donnees){
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = strip_tags($donnees);
            return $donnees;
        }
        $prenom = securisation($_POST['prenom']);
        $nom = securisation($_POST['nom']);
        $email = securisation($_POST['email']);
        $tel = securisation($_POST['tel']);
        $avis = securisation($_POST['avis']);
        
        echo 'Vous vous appelez ' .$prenom. ' ' .$nom. ' et votre addresse e-mail est : ' .$email. '<br> Votre avis : ' .$avis. '<br><br>';
        ?>
    </body>
</html>