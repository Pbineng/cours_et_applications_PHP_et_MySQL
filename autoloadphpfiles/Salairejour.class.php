<?php
class Salairejour extends Salaire{
  const jour = 22 ;
  const tprel = 0.1 ;
  private static $prel ;

  public function __construct(){
      parent::__construct();
      self::$prel = self::$majorations - (self::tprel)*self::$salaireBrut;
      
  }
  public function netaperc(){
      $netPerc = self::$salaireBrut - self::$prel ;
      return $netPerc ;
  }

}
?>
