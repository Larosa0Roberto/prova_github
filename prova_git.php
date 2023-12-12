<?php
// Funzione per generare un numero casuale tra $min e $max
function generaNumeroCasuale($min, $max) {
    return rand($min, $max);
}

// Specifica i valori minimo e massimo
$minimo = 1;
$massimo = 100;

// Genera e stampa un numero casuale
$numeroCasuale = generaNumeroCasuale($minimo, $massimo);
echo "Il numero casuale generato è: $numeroCasuale";
?>