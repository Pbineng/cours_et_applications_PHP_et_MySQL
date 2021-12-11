<?php
    session_start() ;

    if(isset($_POST["valider"]))
    {
        $email = $_POST['email'] ;
        $pass = $_POST['pass'] ; 

        $serveur = 'localhost' ;
        $login = 'root' ;
        $password = '' ;


        $db_connexion = new PDO("mysql:host=$serveur;dbname=app_auth","$login","$password") ; 

        $selListEmail = "SELECT * FROM utilisateurs where email = '$email' " ; //sélectionne la liste des emails de la bdd
        $result = $db_connexion->prepare($selListEmail) ;
        $result->execute() ;

        if($result->rowcount()>0){ // si l'email entré par l'utilisateur correspond à l'un sur le tableau, alors

            $recupListEmail = $result->fechtAll() ;  // récupère la liste des emails sélectionnée
            if(password_verify($pass,$recupListEmail[0]["password"])){ // compare les mots de passe envoyé par l'utisateur et celui correspondant à l'email dans la bdd
                echo "connexion à votre espace réussie " ;
                $_SESSION["email"] = $email ;
            }

        }
        else{
            $pass= password_hash($pass, PASSWORD_DEFAULT) ; 
            $sql = "INSERT INTO utilisateurs (email, pass) 
                VALUES ('$email','$pass') " ;
            $req = $db_connexion->prepare($sql) ;
            $req->execute() ;
            echo "données enregistrées <br><br><br>" ; 

        }
    }
?>