/* 
Creare una variabile $temperatura ed utilizzando if elseif ed else in base alle necessità, stampare il testo “Fa freddo" 
se il valore contenuto in temperatura è minore di 15 gradi.

Stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.

Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" 
se la temperatura supera i 25 gradi.
*/


<?php
// Definiamo la variabile temperatura
$temperatura = 28; // Modificare questo valore per testare altri casi

// Controlliamo la temperatura e stampiamo il messaggio appropriato
if ($temperatura > 25) {
    echo "Fa molto caldo";
} elseif ($temperatura >= 15) {
    echo "Fa caldo";
} else {
    echo "Fa freddo";
}
?>

// Facoltativo: integra questo codice con la traccia precedente per stampare un output su ogni città presente


<?php
// Definiamo l'array delle temperature
$temperature = [
    "Venezia" => 16, "Bari" => 32,
    "Roma" => 28, "Napoli" => 30,
    "Milano" => 4, "Palermo" => 14,
    "Torino" => 24, "Roccaraso" => -5000,
    "Lecce" => 27, "Genova" => 30,
    "Catania" => 11, "Cosenza" => 9,
];

// Iteriamo attraverso l'array delle temperature
foreach ($temperature as $city => $temp) {
    // Determiniamo il tipo di clima
    if ($temp > 25) {
        $clima = "Fa molto caldo";
    } elseif ($temp >= 15) {
        $clima = "Fa caldo";
    } else {
        $clima = "Fa freddo";
    }
    
    // Stampiamo il messaggio
    echo "A $city $clima con $temp\n";
}
?>
