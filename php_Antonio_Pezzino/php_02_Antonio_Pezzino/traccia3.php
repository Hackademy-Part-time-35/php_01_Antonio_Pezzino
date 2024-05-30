/* 
Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP”
 al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".
*/

<?php
// ciclo da 1 a 100
for ($i = 1; $i <= 100; $i++) {
    //  se il numero è multiplo di 3 e 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    }
    // se il numero è multiplo di 3
    elseif ($i % 3 == 0) {
        echo "PHP\n";
    }
    // se il numero è multiplo di 5
    elseif ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    }
    // Se il numero non è multiplo né di 3 né di 5, stampiamo il numero
    else {
        echo "$i\n";
    }
}
?>



