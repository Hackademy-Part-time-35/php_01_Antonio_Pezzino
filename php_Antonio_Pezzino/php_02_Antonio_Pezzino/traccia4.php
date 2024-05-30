/* 
Utilizza il seguente array e stampa per ogni elemento la stringa


 $temperature = [
    "Venezia" => 16, "Bari" => 32,
    "Roma" => 28, "Napoli" => 30,
    "Milano" => 4, "Palermo" => 14,
    "Torino" => 24, "Roccaraso" => -5000,
    "Lecce" => 27, "Genova" => 30,
    "Catania" => 11, "Cosenza" => 9,
  ];


*/




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
    if ($temp < 10) {
        $clima = "freddo";
    } elseif ($temp >= 10 && $temp <= 25) {
        $clima = "caldo";
    } else {
        $clima = "molto caldo";
    }
    
    // Stampiamo il messaggio
    echo "A $city fa $clima con $temp °c\n";
}
?>
