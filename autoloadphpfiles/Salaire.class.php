<?php
class Salaire{
    const taxe = 22.5 ;
    protected static $salaireBrut ;
    protected static $indemnites ;
    protected static $heuresSup ;                      //ON DECLARE LES ATTRIBUTS DE BASE DE LA CLASSE
    protected static $bonus ;
    protected static $prelAssurance ;
    protected static $prelSoc ;
    protected static $majorations ;

    public function __construct(){
        self::$salaireBrut = 1000;
        self::$indemnites = 115;
        self::$heuresSup = 62 ;                     //ON INITIALISE LES ATTRIBUTS DECLARES
        self::$bonus = 0;
        self::$prelAssurance = 95;
        self::$prelSoc = 85 ;
        self::$majorations = self::$salaireBrut+self::$indemnites+self::$heuresSup+self::$bonus ;
    }
    public function affichelements(){
        echo "salaire brut : " .self::$salaireBrut ;
        echo "</br>indemnités : " .self::$indemnites ;
        echo "</br>heures supplémentaires : " .self::$heuresSup ;
        echo "</br>bonus : " .self::$bonus ;                           //METHODE POUR AFFICHER LES ATTRIBUTS DE BASE
        echo "</br>prélèvement assurance : " .self::$prelAssurance ;
        echo "</br>prélèvement sociaux : " .self::$prelSoc ;
        echo "</br>taux d'imposition : " .self::taxe. "%" ;
    }
    public function modifelements($nsalaireBrut,$nheuresSup,$nbonus){
        self::$salaireBrut = $nsalaireBrut ;                               //METHODE POUR MODIFIER LES ATTRIBUTS DE BASE, OU ATTRIBUER DE NOUVEAUX ATTRIBUTS
        self::$heuresSup = $nheuresSup ;
        self::$bonus = $nbonus ;

    }
    public function salaireNet(){
        $impot = self::$majorations*self::taxe/100 ;                                               //METHODE POUR DETERMINER LE RESULTAT DE LA CLASSE, CE QUOI SERT LA CLASSE
        $salNet = self::$majorations-$impot-self::$prelAssurance-self::$prelSoc ;
        return $salNet ;

    }


}

?>