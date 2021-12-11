<?php
class Noms{
    public $nomination ;
    
    public function set_nomination ($nouveau_nom){
        $this ->nomination = $nouveau_nom ;
    }
    
    public function get_nomination (){
        
        $lire = $this ->nomination ;
        return $lire ;
    }
}

class Valeur extends Noms{
    
    public function set_nomination ($long){
        $this ->nomination = $long ;
    }
    
    public function set_clefs ($long){
        $longueur = str_split($long,2);
        $lgr = count($longueur);
        
        return $lgr ;
    }
}


?>