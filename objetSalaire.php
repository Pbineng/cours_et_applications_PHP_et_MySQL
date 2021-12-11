<?php
class Salaire{
    const taxe = 22.5 ;
    private static $salaireBrut ;
    private static $indemnites ;
    private static $heuresSup ;                      //ON DECLARE LES ATTRIBUTS DE BASE DE LA CLASSE
    private static $bonus ;
    private static $prelAssurance ;
    private static $prelSoc ;

    public function __construct(){
        self::$salaireBrut = 1000;
        self::$indemnites = 115;
        self::$heuresSup = 62 ;                     //ON INITIALISE LES ATTRIBUTS DECLARES
        self::$bonus = 0;
        self::$prelAssurance = 95;
        self::$prelSoc = 85 ;
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
        $majorations = self::$salaireBrut+self::$indemnites+self::$heuresSup+self::$bonus ;
        $impot = $majorations*self::taxe/100 ;                                               //METHODE POUR DETERMINER LE RESULTAT DE LA CLASSE, CE QUOI SERT LA CLASSE
        $salNet = $majorations-$impot-self::$prelAssurance-self::$prelSoc ;
        return $salNet ;

    }


}

$salaireJan = new Salaire(); //PREMIER OBJET : pour faire le tout premier calcul, le calcul avec les attributs de base
$nsalaireJan = new Salaire(); // AUTRE OBJET :  pour faire le calcul avec des valeurs d'attributs changées
$salaireFev = new Salaire();
echo "<strong>Eléments constituant le salaire du mois de janvier : </strong></br></br>";
echo $salaireJan->affichelements(); // simplement pour afficher les attributs de base
echo "</br>Net à percevoir : <strong>" ;
echo $salaireJan->salaireNet(); // premier résultat de la classe, fait avec les attributs de base
echo " Euro</strong></br></br> si : salaire brut = 3000 heures supplémentaires = 275 et bonus = 85 on a : </br>nouveau net à percevoir : <strong>" ;


echo $salaireJan->modifelements(3000,275,85); // modification des attributs, ici les nouveaux attributs écrasent ceux précédents
echo $nsalaireJan->salaireNet(); // autre résultat avec les nouvelles valeurs des attributs
echo "</strong></br>" ;


echo $salaireJan->modifelements(3000,70,50);
echo $salaireFev->salaireNet();

?>