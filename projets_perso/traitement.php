<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <title>Message envoyé !</title>
        
    </head>
    <body>
        
        <div id="recap">
        <p>Merci pour votre Message ! <br><br>Voici le recapitulatif de votre demande</p><br>
            <?php
                $prenom = $nom = $phone = $mail = $message = "" ;

                $serveur = "localhost" ;
                $login = "root" ;
                $pass = "" ;
                 
                

                function securisation($donnee){
                    $donnee = trim($donnee) ;
                    $donnee = stripslashes($donnee) ;
                    $donnee = strip_tags($donnee) ;
                    return $donnee ;
                }
                $prenom = securisation($_POST["prenom"]) ;
                $nom = securisation($_POST["nom"]) ;
                $phone = securisation($_POST["phone"]) ;
                $mail = securisation($_POST["mail"]) ;
                $message = securisation($_POST["commentaire"]) ;
            
                echo "<strong>Nom :</strong> " .$nom. "<br><br><strong>Prenom : </strong>" .$prenom. "<br><br><strong>Tél : </strong>" .$phone. "<br><br><strong>E-mail : </strong>" .$mail. "<br><br><strong>Message : </strong>" .$message ;
                
                try{
                    $connexion = new PDO("mysql:host=$serveur;dbname=joli_formulaire", $login,$pass) ;
                    $connexion ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;

                   $requete = $connexion ->prepare(
                       "INSERT INTO message_form(prenom,nom,mail,phone,commentaire) 
                        VALUES(:prenom,:nom,:mail,:phone,:commentaire)"
                        ) ;

                   $requete ->bindParam(":prenom",$prenom) ;
                   $requete ->bindParam(":nom",$nom) ;
                   $requete ->bindParam(":mail",$mail) ;
                   $requete ->bindParam(":phone",$phone) ;
                   $requete ->bindParam(":commentaire",$message) ;

                   $requete  ->execute() ;

                  //  echo '<pre>' ;
                  //      var_dump($_FILES) ;
                  //  echo '</pre>' ;

                   echo "<br><br><strong> Vos données ont bien été enregistrées </strong> " ;
                }
                catch(PDOException $e){
                    echo "<strong>Attention, une erreur s'est produite :</strong> \"connexion à la base de données échouée, vos données ne seront pas enregistrées\" _" .$e->getMessage(). "<br><br>";
                }
            ?>
            
        </div>
    </body>
</html>