<!DOCTYPE html>
<html>
    <head>
        <title>initiation à la programmation orientée objet en Php</title>
        <meta charset="utf-8">
        <style>
            *{
                padding: 10px;
                background-color: rgba(30,70,175,0.03);
            }
            body{
                margin: 10px 20% 0px 20%; 
            }
        
        </style>
    </head>
    
    <body>
        <h2>INITIATION A LA PROGRAMMATION ORIENTEE OBJET EN PHP</h2>
        <p>Communément, il existe 2 façons de coder : </p>
        <ul>
            <li>le codage <strong>procédural </strong>: dans lequel le script est exécuté de manière linéaire, du haut vers le bas sans détour. </li>
            <li>la<strong>POO</strong> :qui est moins linéaire, le script est exécuté en faisant des détours dans d'autres pages. Le but de chaque détour est d'exercer une tâche précise pendant l'exécution du script. Cette façon de coder a l'avantage de présenter une vue plus claire et un code facil à mettre à jour, et convient bien pour la réalisation des grands projets. </li>
        </ul>
        <h3>1- Les notions de classes et d'objets </h3>
        <p>La POO repose sur la création des classes et d'objets. Une <strong>classe</strong> renvoie à une entité particulière contenue dans un autre fichier, reliée au script principal par un chemin précis, qui va effectuer une tâche dépendamment des <strong>Méthodes</strong> ou fonctions et des <strong>Proprietés</strong> ou variables qui lui seront définies, à travers les <strong>objets</strong> ou <strong>instances</strong> la représentant dans le script principal. Dans ce sens, à partir d'une même classe, on va pouvoir créer dans le script principal un ou plusieurs objets + ou - différents entre eux en fonction des valeurs attribuées aux proprietés et/ou aux paramètres de la classe. On peut donc comparer la classe à un <strong>moule</strong> et les objets aux <strong>gâteaux</strong> fabriqués à partir de ces moules.</p>
        <h3>2- Les notions d'héritage et d'encapsulation</h3>
        <p>Il est possible de créer des classes <strong>"filles"</strong> à partir des classes <strong>"mères"</strong>. En plus des proprietés et méthodes <strong>non restreintes</strong> des classes mères que porteront les classes filles, on pourra également ajouter de nouvelles proprités et méthodes à ces dernières. On parle alors d'héritage.
        L'encapsulation consiste quant à elle à la <strong>restriction</strong> d'accès à certaines proprietés et/ou méthodes d'une classe à aux autres. On distingue 3 niveaux de restriction : </p>
        <ul>
            <li><strong>private</strong> : seule la classe en question a accès à ces proprietés et méthodes.</li>
            <li><strong>protective</strong> : seules la classe mères et ses classes filles en y ont accès. </li>
            <li><strong>public</strong> :toutes les classes mères et/ou filles du code en y auront accès. </li>
        </ul>
        <h3>3- Illustration : le reste de cette page sera codé en POO</h3>
        <p>Considerons que l'on afficher un chemin à suivre pour gagner au lotto à nos internautes en fonction du sexe, de l'année de naissance, du mois de naissance, du jour de naissance et du centre d'intérêt choisi.</p>
        <div id="jeu">
        <h3>Le jeu de la richesse !</h3>
            <p>Nota bene : Pour déterminer votre résultat vous devrez renseigner toutes les informations requises. Vous devez être né(e) entre 1990 et 2006. BONNE CHANCE !</p>
            <form method="post" action="traitement.php">
                Vous êtes de sexe :
                <input type="radio" name="sexe" id="masc" value="masc">
                <label for="masc">Masculin</label>
                <input type="radio" name="sexe" id="fem" value="fem">
                <label for="fem">Féminin</label>
                <br><br>
                <label for="nom">Entrez votre nom : </label>
                <input type="text" name="nom" id="nom" placeholder="" maxlength="15" required><br><br>
                <label for="annee">Entrez votre année de naissance : </label>
                <input type="number" name="annee" id="annee" placeholder="" min="1990" max="2006" required><br><br>
                <label for="mois">Entrez votre mois de naissance : </label>
                <input type="number" name="mois" id="mois" placeholder="" min="1" max="12" required><br><br>
                <label for="jour">Entrez votre jour de naissance : </label>
                <input type="number" name="jour" id="jour" placeholder="" min="1" max="31" required><br><br>
                <input type="submit" value="Valider">
            
            </form>
        
        
        
        </div>
    </body>
</html>