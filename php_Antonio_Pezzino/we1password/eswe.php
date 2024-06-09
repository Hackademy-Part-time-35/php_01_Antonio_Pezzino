<?php

// Dovrete scrivere una funzione che controlli una password
// La password dovrà contenere almeno un numero, una lettere maiuscola e essere di almeno 8 caratteri
// dovra avere un valore di ritorno booleano true solo se tutte le condizione sono verificate

function checkPassword($password){

    return checkUpper($password) && checkLength($password) && checkNumeric($password);



}

function checkUpper($stringa){

    $array = str_split($stringa);
    foreach($array as $caratteri){// controllo carattere maiuscolo 
        if(ctype_upper($caratteri)){
            return true;
        } 
    
    }
    return false;

}

function checkNumeric($stringa){

    $array = str_split($stringa);
    foreach($array as $caratteri){ //controllo inserimento caratteri numerici 
        if(is_numeric($caratteri)){
            return true;
        }
    }
    return false ;
}


function checkLength($stringa){ //controllo se i caratteri sono uguali o maggiori a 8
    return strlen($stringa) >=8;

}


$password = readline("la password deve avere almeno 8 caratteri, almeno una lettera maiuscola,almeno un numero: ");

var_dump(checkPassword($password));

?>



<?php

// Dovrete scrivere una funzione che controlli una password
// La password dovrà contenere almeno un numero, una lettere maiuscola e essere di almeno 8 caratteri
// dovra avere un valore di ritorno booleano true solo se tutte le condizione sono verificate


// seconda versione :

function checkPassword($password1) {

    return checkUpper($password1) && checkLength($password1) && checkNumeric($password1);
}

function checkUpper($stringa) {
    return preg_match('/[A-Z]/', $stringa) === 1;
}

function checkNumeric($stringa) {
    return preg_match('/\d/', $stringa) === 1;
}

function checkLength($stringa) {
    return strlen($stringa) >= 8;
}

// Esempio di utilizzo
$password1 = "Test1234";
if (checkPassword($password1)) {
    echo "La password è valida.";
} else {
    echo "La password non è valida.";
}