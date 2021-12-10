<?php

$sum = 0 ;

for($i=0; $i < 100; $i++){
    $sum = $sum + ($i + 1) ; // 0 + 1 , 1 + 2, ...
}

echo PHP_EOL;
echo $sum;
echo PHP_EOL;

// Faire la somme des nombres pairs puis impairs