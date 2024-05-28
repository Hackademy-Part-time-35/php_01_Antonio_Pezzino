/*
Definisci 4 variabili: Integer Float String Boolean 

A schermo, fai comparire il tipo di dato delle varie variabili. 

Pusha il codice su GitHub con il nome php_01_nome_cognome. Integra anche le altre tracce e poi pusha tutto. 

*/



<?php
$integer = 10;
$float = 10.5;
$string = "Sono una stringa!";
$boolean = true;

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);
?>

<?php
$integer = 10;
$float = 10.5;
$string = "sono una stringa!";
$boolean = true;

echo "il valore di integer è: " . $integer . "\n";
echo "il valore di float è: " . $float . "\n";
echo "Il valore di string è: " . $string . "\n";
echo "Il valore di boolean è: " . ($boolean ? 'true' : 'false') . "\n";
?>
