<?php
class Moyenne{
    const coefMaths= 4;
    const coefFran= 2;
    const coefInfor= 3;                                 //ON DECLARE LES CONSTANTES
    const coefScien= 4;
    const coefTm = 1;
    const coefSport = 1;
    private static $maths;
    private static $francais;
    private static $informatique;
    private static $science;
    private static $tm;                                 //ON DECLARE LES ATTRIBUTS
    private static $sport;
    private static $totalCoef ;
    private static $totalNote;

    public function __construct(){
        self::$maths=0;
        self::$francais=0;
        self::$informatique=0;                         //ON INITIALISE LES ATTRIBUTS
        self::$science=0;
        self::$tm=0;
        self::$sport=0;
    }
    public function affichelements(){
        echo "</br></br>Notes : </br></br>Maths : " .self::$maths. "</br>";
        echo "Français : " .self::$francais."</br>";
        echo "Informatique : " .self::$informatique."</br>";           // ON AFFICHE LES ATTRIBUTS INITIAUX
        echo "Science : " .self::$science."</br>";
        echo "Tm : " .self::$tm."</br>";
        echo "Sport : " .self::$sport."</br>";
    }
    public function sommeCoef(){
        self::$totalCoef = self::coefMaths+self::coefFran+self::coefInfor+self::coefScien+self::coefTm+self::coefSport ;       //ON FAIT LA SOMME DES COEFS
        return self::$totalCoef ;
    }
    public function sommeNote(){
        $totalNote = self::$maths+self::$francais+self::$informatique+self::$science+self::$tm+self::$sport ;                 //ON FAIT LA SOMME DES NOTES
        return $totalNote ;
    }
    public function modifelements($nmaths,$nfrancais,$ninformatique,$nscience,$ntm,$nsport){
        self::$maths = $nmaths;
        self::$francais = $nfrancais;                                                                                        //METHODE POUR MODIFIER LES ATTRIBUTS
        self::$informatique = $ninformatique;
        self::$science = $nscience;
        self::$tm = $ntm;
        self::$sport = $nsport;
    }
    public function moyenneGenerale($nmaths,$nfrancais,$ninformatique,$nscience,$ntm,$nsport){
        $mG = ($nmaths*self::coefMaths+$nfrancais*self::coefFran+$ninformatique*self::coefInfor+$nscience*self::coefScien+$ntm*self::coefTm+$nsport*self::coefSport)/self::$totalCoef ;       //METHODE PRINCIPALE DE LA CLASSE, DETERMINER LA MOYENNE GENERALE DES NOTES D'UN ELEVE.
        return $mG ;
    }
}


$trim1= new Moyenne();   //premier objet : objet de base
$trim2 = new Moyenne(); //deuxième objet : implémentation
$moyenneToto = new Moyenne();
$moyenneDominique = new Moyenne();
echo $trim1->affichelements(); //on affiche les attributs à l'initial

echo $trim1->modifelements(10,10,11,13,7,0) ; //on modifie les attributs de base
echo $trim2->affichelements(); // on affiche les nouveaux attributs
echo $trim2->sommeNote(); // on affiche la somme des notes, 
echo "</br>" .$trim2->sommeCoef(); // on affiche la somme des coefs
echo "</br>Moyenne générale : <strong>" .$trim2->moyenneGenerale(10,10,11,13,7,0). "</strong>"; // on calcule la moyenne générale

echo $trim1->modifelements(12,4,3,1,16,18);
echo $moyenneToto->affichelements();
echo "Moyenne générale : <strong>" .$moyenneToto->moyenneGenerale(12,4,3,1,16,18). "</strong>";

echo $trim1->modifelements(18.5,14,16.25,15,18,14) ;
echo $moyenneDominique->affichelements() ;
echo "</br>" .$moyenneDominique->sommeNote();
echo "</br>" .$moyenneDominique->sommeCoef();
echo "</br>Moyenne générale : <strong>" .$moyenneDominique->moyenneGenerale(18.5,14,16.25,15,18,14). "</strong>" ;

?>