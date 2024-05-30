
/* 
Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

es.

  $users = [

     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],

  ];

*/



<?php
// Definiamo l'array di utenti
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Antonio', 'surname' => 'Neri', 'gender' => 'M']
];

// Iteriamo attraverso l'array di utenti
foreach ($users as $user) {
    // Recuperiamo i valori dell'utente
    $name = $user['name'];
    $surname = $user['surname'];
    $gender = $user['gender'];
    
    // Controlliamo il genere e stampiamo il messaggio appropriato
    if ($gender == 'M') {
        echo "Buongiorno Sig. $name $surname\n";
    } elseif ($gender == 'F') {
        echo "Buongiorno Sig.ra $name $surname\n";
    } else {
        echo "Buongiorno $name $surname\n";
    }
}
?>

