<?php
function chargeur($nomClass){
    include($nomClass.'.class.php') ;
}

spl_autoload_register('chargeur');  //fonction pour appeler la classe concernée

$salairemars = new Salaire() ;
echo $salairemars->affichelements();

echo '<br><br> si on a : salaire brut 3500 , heures supp 275 et bonus 110 ' .$salairemars->modifelements(3500,275,110). '</br>';
echo 'salaire net : <b>' .$salairemars->salaireNet(). '</b><br></b><br></b><br>' ;

?>
<?php
spl_autoload_register('chargeur'); //fonction pour appeler la classe concernée

$moyennemars = new Moyenne() ;
echo $moyennemars->affichelements();
echo "Pour les notes  : 17,18,16,18.5,19,19  on a : " .$moyennemars->modifelements(17,18,16,18.5,19,19). '<br>' ;
echo "Somme des notes : " .$moyennemars->sommeNote(). '<br>';
echo "somme coefs : " .$moyennemars->sommeCoef(). '<br>' ; // indispensablement à faire !
echo "La moyenne générale : <b>" .$moyennemars->moyenneGenerale(17,18,16,18.5,19,19). '</b><br><br></b><br></b><br>' ;

?>
<?php
echo '<br><br><br><br>' ;
spl_autoload_register('chargeur');               //fonction pour appeler la classe concernée
$salaireavril = new Salaire() ;
echo $salaireavril->affichelements();
echo '<br><br> si on a : salaire brut 5000 , heures supp 175 et bonus 60 ' .$salairemars->modifelements(5000,175,60). '</br>';
echo 'salaire net : <b>' .$salaireavril->salaireNet(). '</b><br></b><br></b><br>' ;


spl_autoload_register('chargeur');             //fonction pour appeler la classe concernée
$moyenneavril = new Moyenne() ;
echo $moyenneavril->affichelements();
echo "Pour les notes  : 12,13,12,11.5,0,16  on a : " .$moyenneavril->modifelements(12,13,12,11.5,0,16). '<br>' ;
echo "Somme des notes : " .$moyenneavril->sommeNote(). '<br>';
echo "somme coefs : " .$moyenneavril->sommeCoef(). '<br>' ; // indispensablement à faire !
echo "La moyenne générale : <b>" .$moyenneavril->moyenneGenerale(12,13,12,11.5,0,16). '</b><br><br></b><br></b><br>' ;

spl_autoload_register('chargeur') ;
$salairetest = new Salairejour() ;
echo $salairetest->affichelements(). '<br><br>' ;
echo $salairetest->salaireNet(). '<br><br>' ;
echo $salairetest->netaperc(). '<br><br>' ; 
//echo Salairejour::$majorations. '<br><br>' ;

?> 