/*
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

HINT: l’operatore % restituisce il resto della divisione (es. 5 % 3 darà come risultato 2)

*/

<?php
// Array di numeri
$numbers = [16, 21, 33, 24, 54, 68, 72, 58, 19, 70];

// Inizializziamo variabili per la somma dei numeri pari e il conteggio dei numeri pari
$sum = 0;
$count = 0;

// Iteriamo attraverso l'array di numeri
foreach ($numbers as $number) {
    // Controlliamo se il numero è pari
    if ($number % 2 == 0) {
        // Se è pari, aggiungiamo il numero alla somma e incrementiamo il conteggio
        $sum += $number;
        $count++;
    }
}

// Calcoliamo la media dei numeri pari
if ($count > 0) {
    $result = $sum / $count;
    echo "La media dei numeri pari è: $result";
} else {
    echo "Non ci sono numeri pari nell'array";
}
?>

