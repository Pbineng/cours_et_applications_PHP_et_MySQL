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

?>