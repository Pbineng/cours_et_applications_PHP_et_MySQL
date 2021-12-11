<?php
class Moteur{
    private $nom ;                    //ON DECLARE LES ATTRIBUTS
    private $capacite ;

    public function __construct($nomination){
        $this->nom = $nomination;
        $this->capacite = strlen($this->nom)*10 ;          //ON INITIALISE LES ATTRIBUTS

    }
    public function __get($attrib){                          //ON DEFINIT LE GETTEUR POUR ACCEDER AUX DES ATTRIBUTS INACCESSIBLES
        return $this->$attrib ;
    }
    public function __set($attrib,$rempl){             //ON DEFINIT LE SETTEUR POUR NON SEULEMENT ACCEDER A L'ATTRIBUT QUI COINCE MAIS AUSSI POUR LE REMPLACER PAR LE NOUVEL
        $this->$attrib = $rempl ;
    }
    public function __toString(){
        return $this->moteur3 ;
    }

}
$moteur1 = new Moteur('mercedes');
echo 'nom moteur : ' .$moteur1->nom. '<br>' ;
echo 'capacité : ' .$moteur1->capacite. '<br>' ;

$moteur2 = new Moteur('diesel');
echo '<br>nom moteur : ' .$moteur2->nom. '<br>' ;
echo 'capacité : ' .$moteur2->capacite. '<br>' ;

$moteur3 = new Moteur('toyotta') ;
$moteur3->nom = 'vapor' ;                        //nouvel attribut pris en compte grâce au setteur. Normalement l'attribut 'nom' n'est pas accessible.
echo '<br>nom moteur : ' .$moteur3->nom. '<br>' ;
echo 'capacité : ' .$moteur3->capacite. '<br>' ;

?>