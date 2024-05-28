/* 
Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”

 e come valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso.

Utilizzate questo array per stampare una frase di presentazione del tipo:

“Sono paolo e sto studiando bootstrap con giuseppe”


*/





<?php
$corsoHackademy = [
    "docenti" => ["Giuseppe", "Maria", "Luca"],
    "studenti" => ["Paolo", "Francesco", "Chiara"],
    "argomenti" => ["Bootstrap", "PHP", "JavaScript"]
];

echo "Sono " . $corsoHackademy["studenti"][0] . " e sto studiando " . $corsoHackademy["argomenti"][0] . " con " . $corsoHackademy["docenti"][0] . ".";
?>
