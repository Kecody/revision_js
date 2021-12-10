<?php

$sum = 0 ;

for($i=0; $i < 100; $i++){
    $sum = $sum + ($i + 1) ; // 0 + 1 , 1 + 2, ...
}

echo PHP_EOL;
echo $sum;
echo PHP_EOL;

// Exercice Faire la somme des nombres pairs puis impairs
// on a pris que les nombres pairs de 0 à 100

// 1 Exercice
$sum = 0;
for($i=0; $i < 100; $i = $i + 2){
    echo $i;
    echo PHP_EOL;
    $sum = $sum + ($i + 1) ; // 0 + 1 , 1 + 2, ...
}

print($sum);

// ATTENTION A NE PAS FAIRE L'ERREUR SUIVANTE
echo "------";
echo PHP_EOL;

$sum = 0;
// on a pris que tous les nombres de 0 à 100, 100 valeurs
// et on ajoute à $sum <- $i + 2
for($i=0; $i < 100; $i++){
    echo ($i + 2);
    echo PHP_EOL;
    $sum = $sum + ($i + 2) ; // 0 + 1 , 1 + 2, ...
}

// 2 Exercice c'est les nombres impairs compris de 0 à 100
$sum = 0;
for($i=1; $i < 100; $i = $i + 2){
    $sum = $sum + $i ; // 0 + 2 , 2 + 3, ...
}

echo PHP_EOL;
echo $sum;
echo PHP_EOL;

// 3 Exercice 
// Faites la somme des nombres multiples de 11 et de 3 compris entre 0 et 1000