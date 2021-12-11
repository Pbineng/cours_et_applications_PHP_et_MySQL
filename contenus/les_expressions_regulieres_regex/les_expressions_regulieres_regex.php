<!DOCTYPE html>
<html>
    <head>
        <title>les expressions régulières "REGEX"</title>
    </head>
    <body>
        <h2>LES EXPRESSIONS REGULIERES "REGEX" </h2>
        <p>Il s'agit d'une manière de contrôler les données envoyées par les utilisateurs, et d'effectuer des recherches ou des remplacements dans toutes sortes de chaînes de caractères. Les REGEX n'appartiennent ni au PHP ni au Mysql, mais constituent un langage en soi. On va pouvoir les utiliser avec PHP grâce à une librairie PHP (une extension de PHP).<br>
        Il existe 2 types de REGEX : </p>
        <ul>
            <li>le type <strong>POSIX</strong> : qui a été déprécier depuis php 5.3 </li>
            <li>le type <strong>PCRE</strong> : (Perl Compatible Regular Expression) que nous étudier ici.</li>
        </ul>
        <h4>1- PREG Match (Perform Regular Expression Match) </h4>
        <p>Elle permet de rechercher une expression dans une chaîne de caractères. Si l'expression est trouvée, la condition retourne retourne "True" sinon "False". Elle prend 2 valeurs (la variable contenant l'expression à rechercher, et la variable contenant la zone où rechercher) :</p>
        Exemple : <br>
        <?php
        $texte = "Une seule direction, la bonne";
        $regex = "direction";
        
        if(preg_match("/$regex/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée dans le texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée dans le texte : " .$texte. ".<br>";
        }
        ?>
        <?php
        $texte = "Une seule direction, la bonne";
        $regex = "onn";
        
        if(preg_match("/$regex/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée dans le texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée dans le texte : " .$texte. ".<br>";
        }
        ?>
        <?php
        $texte = "Une seule direction, la bonne";
        $regex = "lune";
        
        if(preg_match("/$regex/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée dans le texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée dans le texte : " .$texte. ".<br>";
        }
        ?>
        <p>Pour construire une REGEX, on va utiliser des <strong>délimiteurs</strong> (les slashes par exemple, etc). </p>
        <p><strong>N.B :</strong>Les REGEX sont sensibles à la casse. Pour les rendre insensibles à la casse, on va utiliser la lettre <strong>i</strong> après le délimiteur droit :</p>
        <?php
        $texte = "Une seule direction, la bonne.";
        $regex = "Direction";
        
        if(preg_match("/$regex/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée dans le texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée dans le texte : " .$texte. ".<br>";
        }
        ?>
        <?php
        $texte = "Une seule direction, la bonne.";
        $regex = "Direction";
        
        if(preg_match("/$regex/i", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée dans le texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée dans le texte : " .$texte. ".<br>";
        }
        ?>
        <p><strong>N.B :</strong>Mettre un châpeau chinois en début du regex signifie qu'on recherche le regex en début de la chaîne de caractères : </p>
        <?php
        $texte = "Une seule direction, la bonne.";
        $regex = "direction";
        
        if(preg_match("/^$regex/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée au debut du texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée au debut texte : " .$texte. ".<br>";
        }
        ?>
        <p><strong>N.B :</strong>Mettre un $ à la fin du regex signifie qu'on le recherche à la fin de la chaîne de caractères si la chaîne de caractères ne se termine pas par un point : </p>
        <?php
        $texte = "Une seule direction, la bonne.";
        $regex = "onne";
        
        if(preg_match("/$regex$/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée à la fin du texte : " .$texte. ".<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée à la fin du texte : " .$texte. "<br>";
        }
        ?>
        <?php
        $texte = "Une seule direction, la bonne";
        $regex = "onne";
        
        if(preg_match("/$regex$/", $texte)){
            echo "l'expression <strong>'" .$regex. "'</strong> a bien été trouvée à la fin du texte : " .$texte. "<br>";
        }
        else{
            echo "l'expression <strong>'" .$regex. "'</strong> n'a pas été trouvée à la fin du texte : " .$texte. "<br>";
        }
        ?>
        <p>Le "ou" se matérialise par la barre horizontale(|). Il ne doit pas y avoir des espaces dans les REGEX. </p>
        <?php
        $texte = "Une seule direction, la bonne";
        $regex1 = "direction";
        $regex2 = "onne";
        
        if(preg_match("/$regex1|$regex2/", $texte)){
            echo "les expressions <strong>'" .$regex1. "'</strong> et <strong>'" .$regex2. "'</strong> ont bien été trouvées dans le texte : " .$texte. "<br>";
        }
        else{
            echo "les expressions <strong>'" .$regex1. "'</strong> et <strong>'" .$regex2. "'</strong> n'ont pas été trouvées dans le texte : " .$texte. "<br>";
        }
        ?>
        <?php
        $texte = "Une seule direction, la bonne";
        $regex1 = "direction";
        $regex2 = "lune";
        
        if(preg_match("/$regex1|$regex2/", $texte)){
            echo "les expressions <strong>'" .$regex1. "'</strong> et <strong>'" .$regex2. "'</strong> ont bien été trouvées dans le texte : " .$texte. "<br>";
        }
        else{
            echo "les expressions <strong>'" .$regex1. "'</strong> et <strong>'" .$regex2. "'</strong> n'ont pas été trouvées dans le texte : " .$texte. "<br>";
        }
        ?>
        <h4>2- Les classes de caractères</h4>
        <p>On peut faire les recherches des caractères en mettant ceux ci dans les crochets :</p>
        <ul>
            <li>Recherche une voyelle : ("/[aeiouy]/",$r). Dans ce cas, le ^ et le $ se mettront hors des crochets.<br>
            <?php
        $texte = "Une seule direction, la bonne.";
        $regex = "aeiouy";
        
        if(preg_match("/[$regex]/", $texte)){
            echo "les caractères <strong>'" .$regex. "'</strong> ont bien été trouvés dans le texte : " .$texte. ".<br>";
        }
        else{
            echo "les caractères <strong>'" .$regex. "'</strong> n'ont pas été trouvés dans le  texte : " .$texte. ".<br>";
        }
        ?>   
            </li>
            <li>Rechercher une lettre quelconque dans l'intervalle a-z : ("/[a-z]/",$r) ou bien ("/[a-z]i/",$r) ou ("/[A-Z]/",$r) ; et ou les chiffres : ("/[0-9]/",$r). Aussi ("/[a-zA-Z0-0]/",$r), on peut aussi ajouter éèà
            </li>
            <li>Le chapeau chinois à l'intérieur de la classe indique qu'on recherche toutes les lettres sauf les lettres indiquées : ("/[^a-p]/",$r)
            </li>
        </ul>
        <h4>3- Les classes abrégées</h4>
        <p>Il s'agit d'un moyen rapide d'écrire certains intervalles de classe. On utilise l'antislashe : </p>
        <ul>
            <li>("/\d/",$r)=>[0-9] On recherche un chiffre entre 0-9
            </li>
            <li>("/\D/",$r)=>[^0-9] On recherche tout chiffre sauf entre 0-9
            </li>
            <li>("/\w/",$r)=>[a-zA-Z0-9] et ("/\W/",$r)=>[^a-zA-Z0-9]
            </li>
            <li>("/\n/",$r) sur Mac et ("/\n\r/",$r) sur windows , pour rechercher une nouvelle ligne
            </li>
            <li>("/\s/",$r) recherche s'il y a l'espace  </li>
            <li>("/\S/",$r) recherche tout sauf un espace  </li>
            <li>("/./",$r) recherche tout sauf un retour à la ligne  </li>
        </ul>
        <h4>4- Les quantificateurs </h4>
        <p>Ils permettent de spécifier combien de fois un caractère ou une expression doit apparaître. On en distingue 3 principaux : </p>
        <ul>
            <li>? : l'expression est facultative, 0 ou une fois</li>
            <li>+ : l'expression doit apparaître au moins une fois</li>
            <li>* : 0, une fois ou plusieurs fois</li>
        </ul>
        <p>Par exemple : /z?/ => pas de z ou z une fois. /z+/ 1 ou plusieurs z . /z*/ soit pas de z soit un z soit plusieurs z</p>
        <ul>
            <li>/a{3}/ veut dire qu'on recherche une suite de ax3 . on peut aussi avoir aaaaaa</li>
            <li>/^a{3}$/ : on ne recherche que la chaîne de aaa </li>
            <li>/a{3,}/ : on recherche ax3 ou plus</li>
            <li>/a{3,5}/ : on recherche ax3 ou ax4 ou ax5</li>
            <li>/a{3,5}h/ : on recherche ax3 ou ax4 ou ax5 et un h</li>
        </ul>
        <h4>5- Les meta caractères</h4>
        <p>Ce sont les caractères spéciaux qui possèdent une signification particulière : ^, {}, +, *, ., \, () </p>
        
        
        <h1>FIN DU COURS DE Php ET Mysql </h1>
        théorie terminée le 31 Décembre 2020<br>
        pratique terminée le 06 février 2021
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>