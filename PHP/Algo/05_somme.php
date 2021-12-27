<?php

/*
Exercice 1

Faite la somme des deux tableaux suivants terme à terme

$number1 = [1,2,3,4, 5, 6, 7, 8, 9, 10];
$number2 = [10, 20, 30,40, 50, 60, 70, 80, 90, 100];
// 11, 22, 33, 44, ... 
*/

$number1 = [1,2,3,4, 5, 6, 7, 8, 9, 10];
$number2 = [10, 20, 30,40, 50, 60, 70, 80, 90, 100];
$total = [];
// faire la somme des deux tableaux que si ils sont de même longueur 
if(count($number1) == count($number2)){
    $dim = count($number1) ;

    for($key=0; $key < $dim ; $key++){
        $total[] = $number1[$key] + $number2[$key] ;
    }
}

echo print_r($total);
echo PHP_EOL;

// Exercice 2

// faire la somme des nombres suivants en multipliant à chaque fois par 2, 4, 6, 8, ... chaque nombre à sommer
// 11*2 12*4 14*6  ... 
$numbers = [11, 12, 14, 17, 2];
$j = 2 ; // coeffi multiplicateur qui augmente de +2 à chaque itération
$sum = 0;
for($i=0;$i < count($numbers); $i++){
    $sum += $numbers[$i] * $j ;
    $j+=2;
}

echo $sum;
echo PHP_EOL;