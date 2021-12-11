<!DOCTYPE html>
<html>
    <head>
        <title>les filtres en php</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h2>LES FILTRES EN PHP</h2>
        <p>Les filtres constituent un bon moyen de vérifier la conformité des données envoyées par les utilisateurs avec ce qui est attendu. L'extension <strong>filtre</strong> va permettre de filtrer les données de 2 manières : </p>
        <ul>
            <li>En les <strong>validant</strong> : la validation consiste à analyser les donées en soi et à déterminer si oui ou non elles correspondent à la forme attendue (par exemple, vérifier s'il y a un @ requis où une addresse email est demandée). </li>
            <li>En les <strong>nettoyant</strong> : le nettoyage consiste à modifier les données le cas échéant en retirant les caractères indésirables.</li>
        </ul>
        <h4>1- La fonction filter_list</h4>
        <p>Elle permet de récupérer la liste des filtres php déjà prêtes à l'emploi. </p>
        <table border="solid">
            <tr>
                <th>Nom du filtre</th>
                <th>Id du filtre</th>
            </tr>
            <?php
            $filtre = filter_list();
            foreach($filtre as $id=>$nomfiltre){
                echo"<tr><td>" .$nomfiltre. "</td><td>" .filter_id($nomfiltre). "</td></tr>";
            }
            ?>
        </table>
        <h4>2- La fonction FILTER VAR</h4>
        <p>Elle est utilisée pour appliquer un filtre spécifique à une variable choisie. Elle permet d'appliquer les filtres de validation et de nettoyage.</p>
        <h4>2.1- filter_validate_int</h4>
        <p>Elle permet de valider un entier. Ce type de filtre ne distingue pas les chaînes de caractères et les nombres (1 ou "1" c'est pareil) :</p>
        <?php
        
        $int = 200 ;
        
        
        if(!filter_var($int, FILTER_VALIDATE_INT)===false){
            echo"<strong>*La variable contient bien un nombre entier.</strong><br>ici le test est fait avec : 200 <br>";
        }
        else{
            echo"<strong>La variable ne contient pas un nombre entier.</strong><br>ici le test est fait avec : 200<br>";
        }
        ?>
        <?php
        
        $int = "mot";
        
        
        if(!filter_var($int, FILTER_VALIDATE_INT)===false){
            echo"<br><strong>*La variable contient bien un nombre entier.</strong><br>ici le test est fait avec : 'mot'<br>";
        }
        else{
            echo"<strong>*La variable ne contient pas un nombre entier.</strong><br>ici le test est fait avec : 'mot'<br>";
        }
        ?>
        <?php
        
        $int = 0;
        
        
        if(!filter_var($int, FILTER_VALIDATE_INT)===false){
            echo"<br><strong>*La variable contient bien un nombre entier.</strong><br>ici le test est fait avec : 0<br>";
        }
        else{
            echo"<strong>*La variable ne contient pas un nombre entier.</strong><br>ici le test est fait avec : 0<br>";
        }
        ?>
        <p>Finalement, pour faire passer le 0 comme nombre entier, on peut écrire la syntaxe suivante : </p>
        <?php
        
        $int = 0;
        
        
        if(filter_var($int, FILTER_VALIDATE_INT)===0){
            echo"<strong>*La variable contient bien un nombre entier.</strong><br>ici le test est fait avec : 0<br>";
        }
        else{
            echo"<strong>*La variable ne contient pas un nombre entier.</strong><br>ici le test est fait avec : 0<br>";
        }
        ?>
        <p>Par ailleurs, on peut aussi vérifier qu'un nombre se trouve bien dans un intervalle ou une tranche. Pour ce faire, on va ajouter 2 variables dans la déclaration de la fonction : MIN et MAX. Cette astuce est particulièrement utile pour les tableaux multidimensionnels :</p>
        
        <?php
        $int = 15;
        $max =100;
        $min=1;
        
        if(!filter_var($int, FILTER_VALIDATE_INT, array("options" =>array("min_range"=>$min,"max_range"=>$max)))==false){
        echo"<br><strong>*le nombre se trouve bien dans l'intervalle indiqué.</strong><br>ici le test est fait avec : 15 pour[1;100]<br>";
        }
        else{
            echo"<strong>*le nombre ne se trouve pas dans l'intervalle indiqué ou est non entier.</strong><br>ici le test est fait avec : 15 pour [1;100]<br>";
        }
        ?>
        <?php
        $int = 150;
        $max =100;
        $min=1;
        
        if(!filter_var($int, FILTER_VALIDATE_INT, array("options" =>array("min_range"=>$min,"max_range"=>$max)))==false){
        echo"<br><strong>*le nombre se trouve bien dans l'intervalle indiqué.</strong><br>ici le test est fait avec : 15 pour[1;100]<br>";
        }
        else{
            echo"<strong>*le nombre ne se trouve pas dans l'intervalle indiqué ou est non entier.</strong><br>ici le test est fait avec : 150 pour [1;100]<br>";
        }
        ?>
        <h4>2.2- Nettoyer et valider un email</h4>
        <p>On va utiliser la fonction FILTER_SANITIZE </p>
        
        <?php
        $email = "pierre@gmail";
        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            echo"*l'email <strong>" .$email. "</strong> possède une forme valide <br>";
        }
        else{
            echo "*l'email <strong>'" .$email. "'</strong> n'est pas valide<br>";
        }
        ?>
        <?php
        $email = "pierre@gmail.com";
        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            echo"*l'email <strong>'" .$email. "'</strong> possède une forme valide <br>";
        }
        else{
            echo "*l'email <strong>'" .$email. "'</strong> n'est pas valide<br>";
        }
        ?>
        <p>Pour vérifier à la fois si le mail était valide avant et après le nettoyage, on peut procéder comme suit : </p>
        <?php
        $email = "p/i/erre/@gm(ail).com";
        
        $emailnew = filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($emailnew, FILTER_VALIDATE_EMAIL)===false){
            if($emailnew!=$email){
                echo"le mail possède désormais une forme valide.<br>
                mail envoyé: <strong>" .$email. "</strong><br>
                mail après transformation :<strong>" .$emailnew. "</strong><br><br>";
                }
               else{
                    echo"adresse email valide";
            }
        }
        else{
            echo"adresse email invalide <br>";
        }
        ?>
        <?php
        $email = "pierre@gm(ail).com";
        
        $emailnew = filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($emailnew, FILTER_VALIDATE_EMAIL)===false){
            if($emailnew!=$email){
                echo"le mail possède désormais une forme valide.<br>
                mail envoyé: <strong>" .$email. "</strong><br>
                mail après transformation :<strong>" .$emailnew. "</strong><br><br>";
                }
               else{
                    echo"adresse email valide";
            }
        }
        else{
            echo"adresse email invalide <br>";
        }
        ?>
        <?php
        $email = "p/i/erre/@gm(ail).";
        
        $emailnew = filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($emailnew, FILTER_VALIDATE_EMAIL)===false){
            if($emailnew!=$email){
                echo"le mail possède désormais une forme valide.<br>
                mail envoyé: <strong>" .$email. "</strong><br>
                mail après transformation :<strong>" .$emailnew. "</strong><br>";
                }
               else{
                    echo"adresse email valide";
            }
        }
        else{
            echo"<strong>" .$email. "</strong>: adresse email invalide <br>";
        }
        ?>
        <h4>2.3- Filtre pour nettoyer une URL</h4>
        <p>On va utiliser la fonction FILTER_SANITIZE_URL </p>
        <?php
        $url = "http//google.com";
        
        $url = filter_var($url,FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)===false){
            echo"l'url <strong>'" .$url. "'</strong> est valide<br>";
        }
        else{
            echo"l'url <strong>'" .$url. "'</strong> n'est pas valide.<br>";
        }
        ?>
        <?php
        $url = "http://google.com";
        
        $url = filter_var($url,FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)===false){
            echo"l'url <strong>'" .$url. "'</strong> est valide.<br>";
        }
        else{
            echo"l'url <strong>'" .$url. "'</strong> n'est pas valide.<br>";
        }
        ?>
        <?php
        $url = "http://google";
        
        $url = filter_var($url,FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)===false){
            echo"l'url <strong>'" .$url. "'</strong> est valide.<br>";
        }
        else{
            echo"l'url <strong>'" .$url. "'</strong> n'est pas valide.<br>";
        }
        ?>
        <p>Officiellement une url écrite sans la terminaison du domaine(.com, .fr, ...) est valide. </p>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>