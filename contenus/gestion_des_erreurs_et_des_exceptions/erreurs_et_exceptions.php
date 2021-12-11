<!DOCTYPE html>
<html>
    <head>
        <title>gestion des erreurs et des exceptions en php</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>GESTION DES ERREURS ET DES EXCEPTIONS EN PHP</h1>
        <h3>1- Les erreurs</h3>
        <p>Il existe plusieurs options permettant de gérer les erreurs en php. On peut soit <strong>créer un script autour de la fonction</strong>(avec la fonction "Die") soit <strong>créer une fonction personnalisée</strong>.</p>
        <h4>1.1- La fonction "Die" </h4>
        <p>Elle permet d'arrêter le script et d'envoyer un message d'erreur à l'utilisateur. Elle prend un seul paramètre : le message d'erreur. </p>
        <?php
        if(!file_exists("page_test1.txt")){
            die("page recherchée non trouvée !");
            }
        else{
            $test = fopen("page_test1.txt","r+");
            $page = fread($test, 1000);
            echo $page;
            fclose ($test);
            
        }
        echo "<br><br>";
        ?>
        <?php
      /*  if(!file_exists("page_test2.txt")){
            die("page recherchée non trouvée !<br>");
            }
        else{
            $test = fopen("page_test2.txt","r+");
            $page = fread($test, 1000);
            echo $page;
            fclose ($page);
        }*/
        ?>
        <strong>N.B :</strong>Dans certains cas cette solution n'est pas la meilleure.<br>
        <h4>1.2- Une fonction personnalisée</h4>
        <p>Il s'agit de créer une fonction dont les outils existent déjà dans php(le nom de la fonction par exemple) à laquelle on attribuera 2 paramètres : le niveau d'erreur et le message à envoyer. On peut trouver les différents niveaux d'erreur sur internet.</p>
        <h3>2- Les exceptions</h3>
        <p>Les exceptions nous permettent de modifier la façon dont notre script sera exécuté si jamais une condition d'erreur exceptionnelle survient au milieu de ce script. Lorsque php rencontre une exception, la suite du script n'est lu. Pour mettre en place une exception, on procède en 3 étapes : </p>
        <ul>
            <li><strong>Try</strong> : cette étape permet de tester si la fonction va déclencher une erreur ou pas.</li>
            <li><strong>Through</strong> : ici on lance l'exception le cas échéant.</li>
            <li><strong>Catch</strong> : On recupère l'exception si elle a été lancée.</li>
        </ul>
        <p>Généralement l'exception survient lors de l'exécution des fonctions</p>
        Illustration : la division d'un nombre par 0.<br>
        <?php
        function Division($x,$y){
            if($y==0){
                throw new exception("<strong>division par zéro impossible !</strong><br>");
            }
                return $x/$y;
            /*else{
                $z = $x/$y ;
                    return $z;*/
            }
            try{
                echo "la division de 4 par 2 donne : <strong>" .Division(4,2). "</strong><br>";
                echo "la division de 18 par 3 donne : <strong>" .Division(18,3). "</strong><br>";
                echo "la division de 5 par 0 donne : " ;
                    echo Division(5,0). "<br>";
                echo "la division de 9 par 9 donne : <strong>" .Division(9,9). "</strong><br>";
            }
            catch(exception $c){
                echo "Message d'erreur : " .$c->getMessage();
            }
        ?>
        
        
    </body>
</html>