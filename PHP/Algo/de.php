<?php

/**
 * Exercice 
 *  1. On jete un dé à 6 faces équilibrés. Créez une fonction qui simule un lancer.
 * 
 *  2. Répétez 100000 fois un lancer de dé et calculez la probabilité d'obtenir un 3 
 */

// 1
// On peut du reste utiliser directement la fonction random_int sans re-créer une autre fonction
//  function laner(int $numFaces = 6){

//     return random_int(1, $numFaces);
//  }

//  laner(); // 1, 2, 3, 4,..., 6

// 2
$count = 0; // comptez le nombre de fois que vous obtenez 3
$max = 100000;
$numFaces = 6;
$face = 3;
$nbFace = 0;

while ($count < $max) {
    $count++;
    if (random_int(1, $numFaces) == $face) {
        $nbFace++;
    }
}

// Affichez la proba
echo print_r($nbFace/$max);
echo PHP_EOL;