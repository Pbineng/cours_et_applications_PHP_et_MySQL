
const testeurPrenom = document.getElementById("prenom") ;
const testeurNom = document.getElementById("nom") ;
const testeurTel = document.getElementById("phone") ;
const submitt = document.getElementById("envoyer") ;
const verifPrenom = document.getElementById("prenom_manquant") ;
const verifNom = document.getElementById("nom_manquant") ;
const verifPhone = document.getElementById("tel_invalid") ;

submitt.addEventListener("click", validation) ;

function validation(e){

    var phoneFormat = /^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{2})[-. ]?([0-9]{3})$/;

    if(testeurPrenom.validity.valueMissing){
        e.preventDefault() ;
        verifPrenom.textContent = "*prenom manquant" ;
        //verifPrenom.style.color = "red" ;
    }
    else if(testeurNom.validity.valueMissing){
        e.preventDefault() ;
        verifNom.textContent = "*nom manquant" ;
        //verifNom.style.color = "red" ;
    }
    else if(!(testeurTel.value.match(phoneFormat))){
        e.preventDefault() ;
        verifPhone.textContent = "*numero de téléphone manquant ou format invalide" ;
        //verifPhone.style.color = "red" ;
    }
    else{
        
    }
}

 /*window.onload = function (){
    var surnameFormat ;
    var surnameNotValid ;
    var nameFormat ;
    var numberFormat ;
    var messageFormat ;
    var submitForm ;

    
    submitForm = document.getElementById("envoyer") ;
    surnameFormat = document.getElementById("prenom") ;
    surnameNotValid = document.getElementById("prenom_manquant") ;

    validation.addEventListener("click",f_validation) ;

    function f_validation(e) {
        if(surnameFormat.valueMissing){
            e.preventDefault() ;
            surnameNotValid.textContent = "prenom manquant !" ;
            surnameNotValid.style.color = "red" ;
        }
    }
    

}*/
