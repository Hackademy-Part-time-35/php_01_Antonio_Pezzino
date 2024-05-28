/*
Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = 10; ed utilizzando var_dump() per visualizzare l'esito dei seguenti confronti: 

 $x < $y [esempio: var_dump($x < $y); ] 

 $x <= $w 

 $y == $z 

 $y === $z 

 $y !== $z

 $y != $z


 cambiando anche a piacere le variabili per verificare il funzionamento dei diversi operatori di confronto

*/ 

<?php
$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x < $y);  // Stampa bool(true) perché 10 è minore di 20

var_dump($x <= $w); // Stampa bool(true) perché 10 è uguale a 10

var_dump($y == $z); // Stampa bool(true) perché "20" (stringa) viene convertito in 20 (numero) per il confronto

var_dump($y === $z); // Stampa bool(false) perché "20" (stringa) non è lo stesso tipo di 20 (numero)

var_dump($y !== $z); // Stampa bool(true) perché "20" (stringa) non è lo stesso tipo di 20 (numero)

var_dump($y != $z); // Stampa bool(false) perché "20" (stringa) viene convertito in 20 (numero) per il confronto
?>