<?php
    class Ballon {
        private $taille = 15 ;
        public $couleur = "blanche" ;
        private $forme = "rond" ;

        public function tailleBondissement(){
            
            $longueur = 5 ;
            $largeur = 4 ;
            $result = $longueur*$largeur ;
            return $result;
        }
        public function afficheVitesse(){
            return $this->forme;
        }
    }

    $ballonFootball = new Ballon() ;
    echo $ballonFootball->tailleBondissement() ;
    echo $ballonFootball->couleur ;
    echo $ballonFootball->afficheVitesse() ;
    echo '<br>' ;

    $ballonBasketball = new Ballon() ;
    echo $ballonBasketball->tailleBondissement() ;
    echo $ballonBasketball->couleur ;
    echo $ballonBasketball->afficheVitesse() ;
    echo '<br>' ;

    $ballonHandball = new Ballon() ;
    echo $ballonHandball->tailleBondissement() ;
    echo $ballonHandball->couleur ;
    echo $ballonHandball->afficheVitesse() ;
    echo '<br><br><br><br><br><br><br><br>' ;

?>
<?php
    class Cahier {
        private $taille ;
        private $couleur ;
        private $forme ;

        public function __construct($tle=12,$clr="vert",$frm="triangle"){
            $this->taille=$tle;
            $this->couleur=$clr ;
            $this->forme=$frm ;
            echo 'test sur le __construct' ;
        }

        public function tailleBondissement(){
            
            $longueur = 7 ;
            $largeur = 4 ;
            $result = $longueur*$largeur ;
            return $result;
        }
        public function afficheDate(){
            $date = new DateTime() ;
            echo $date->format('Y-m-d H:i:s') ;
        }
    }

    $cahierMaths = new Cahier(10,'noir','carre') ;
    // echo $cahierMaths->tailleBondissement() ;
    // echo $cahierMaths->couleur ;
    // echo $cahierMaths->afficheDate() ;
    echo '<br>' ;

    $cahierDeutsch = new Cahier(15,'jaune','rectangle') ;
    // echo $cahierDeutsch->tailleBondissement() ;
    // echo $cahierDeutsch->couleur ;
    // echo $cahierDeutsch->afficheDate() ;
    echo '<br><br><br><br><br><br>' ;
?>

<!--CONSTANTES DE CLASSE ET ATTRIBUTS ET METHODES STATICS
<?php
    class Salaire{
        const impot = 19.25 ;
        private static $cotisations ;
        private static $salBrut ;
        public function __construct(){
            self::$cotisations = 95 ;
            self::$salBrut = 1000 ;
        }
        public function affichecotisations(){
            return 'Montant fixe cotisations : ' .self::$cotisations ;
        }
        public function affichetaux(){
            return "Taux d'imposition : " .self::impot ;
        }
        public static function salaireNet($salBrut,$cotisations){
            $SN = $salBrut*(1-self::impot/100)-self::$cotisations ;
            return $SN ;
        }
        public function modifcotisations($nvcot){
            self::$cotisations = $nvcot ;
        }
        public function modifsalaire($nvSalBrut){
            self::$salBrut = $nvSalBrut ;
        }
    }

    echo Salaire::cotisations();
    $salaire1 = new Salaire(); //ici on crée une instance et on détermine un membre de la classe (le salaire net, qui est une methode de la classe)
    // echo '<br>' .Salaire::affichetaux ;
    // echo '<br>' .Salaire::affichecotisations ;
    // echo $salaire1->affichecotisations();

    // echo '<br>Pour un salaire brut de 2000, on a SN = ' .$salaire1->salaireNet(1000);
    // echo '<br>Pour un salaire brut de 2000, on a SN = ' .Salaire::salaireNet(2000) ; // ici on invoque le membre de la classe sans tenir compte de l'objet, ceci est possible lorsqu'on mention 'satic' au niveau du membre de la classe
    // $salaire2 = new Salaire();
    // echo $salaire2->affichetaux();
    

?>