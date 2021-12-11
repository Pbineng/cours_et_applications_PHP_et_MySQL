<?php

// echo '<pre>' ;
//     var_dump($_FILES) ;
// echo '</pre>';


$fichier = $_FILES['fichier1'] ;


$ext = pathinfo($fichier['name'], PATHINFO_EXTENSION) ;

if($fichier['size'] > 5*1024*1024 ){
    echo 'Erreur :  taille du fichier dépassée !' ;
}
elseif (!in_array($ext, ['png','jpeg','svg','jpg'])){
    echo 'le format de ce fichier n\'est pas pris en charge' ;
}
else{
    move_uploaded_file($_FILES['fichier1']['tmp_name'], 'filetest.jpg') ;
    echo 'fichier enregistré.' ;
}
?>
