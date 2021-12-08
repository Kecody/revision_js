<?php

$message = "Bonjour";

/**
 * Exercice 1
 * à l'aide d'un script inverser la chaîne de caractères ci-dessus
 * On peut parcourir une chaîne comme un tableau
 */

$reverse = '';
for ($i = 0; $i < strlen($message); $i++) {
    $reverse = $message[$i] . $reverse;
}

// PHP_EOL permet de sauter des lignes dans la console
echo PHP_EOL;
echo $reverse;
echo PHP_EOL;

 // Exercice 2
 /*
    soit le message suivant $message = "Bonjour";
    Mettez tous les caractères dans un tableau $characters
 */

$message = "Bonjour";
$letters = [];
for ($i = 0; $i < strlen($message); $i++) {
    $letters[] = $message[$i];
}

echo PHP_EOL;
print_r($letters);
echo PHP_EOL;
