<!DOCTYPE html>
<html>
    <head>
        <title>initiation à MYSQL PHPmyAdmin et aux bases de données</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>INITIATION A MySQL PhPmyAdmin ET AUX BASES DE DONNEES</h1>
        <h2>Introduction</h2>
        <p>Une base de données est un endroit où on peut stocker des informations de manière définitive, par exemple des noms, prenoms, âges des utilisateurs. Ces informations à stocker devront tout d'abord être réorganisées pendant le stockage. Il existe plusieurs systèmes de gestion de base de données dont <strong>MySQL</strong>, on peut également citer : Oracle, Postgre SQL.<br><br>
        Tous les systèmes de gestion de BDD vont reposer sur le langage informatique <strong>SQL</strong>. Il nous reviendra donc de <strong>coder en SQL</strong> pour envoyer des instructions au système SQL. Pour ceci on va écrire les ordres en en SQL par l'intermédiaire du <strong>PhP</strong>. On se servira de ce fait du PhP pour créer une connexion avec MySQL.<br><br>
        écrire des ordres en SQL -------->PhP-------->pour MySQL <br><br>
        On peut interagir avec notre BDD de 2 façons :</p>
        <ul>
            <li>Soit à travers le php (comme décrit ci-dessus)</li>
            <li>Soit à travers le <strong>PhPMyAdmin</strong> qui est un ensemble de page précodées et embarquées pour nos Servers. </li>
        </ul>
        <p>Une BDD est constituée de plusieurs <strong>tables</strong> qui regroupent les données d'un groupe (par exemple pour les commentaires d'un blog); dans une table on a des <strong>lignes</strong> (des entrées) et des <strong>colonnes</strong> (des détails). Un <strong>champs</strong> correspond à l'intercession entre une entrée et un détail. </p>
        <h4>Création d'une BDD : Quelques vocabulaires </h4>
        <p><strong>Auto-incrémentation</strong> : réglage qui permet à ce que les utilisateurs n'aient pas les mêmes identités.<br>
        <strong>primary</strong> ne doit être utilisé qu'une fois généralement pour les ID, il permet à ce qu'il y ait pas de colonnes de même type.<br><strong>exécuter une requête dans une BDD</strong> c'est demander d'effectuer une action dans cette BDD par exemple "sélectionner des éléments ou en insérer".<br>
        <strong>Requête</strong> : onglet d'aide permettant de choisir l'action qu'on souhaite faire sur le BDD. Cet onglet va afficher la requête SQL correspondante et on aura qu'à l'exécuter.<br>
        On peut <strong>importer/exporter</strong> une BDD créée localement vers un server distant et vice versa. On peut supprimer une BDD avec l'option "OPERATIONS", et cela est <strong>irreversible.</strong></p>
        
        
        
        
        
        
        
    </body>
</html>