/* 

Date le seguenti variabili:

$1text = "Marco"; 
$text2 = "hai"; 
$text.3 = "sete"; 
$text4 = "?"; 
@text5 = "Perchè"; 
$te-xt6 = '$text2'; 
$text 7 = 'bevuto'; 
$text8 = "tutto" 
correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“

In PHP, i nomi delle variabili devono iniziare con un carattere di sottolineatura o una lettera, e possono contenere solo caratteri alfanumerici e 
il carattere di sottolineatura. Quindi, alcune delle tue variabili non sono valide. Ecco come potresti correggere le tue variabili e 
stampare la stringa desiderata:

*/


<?php

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = 'tutto';

echo $text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".";

