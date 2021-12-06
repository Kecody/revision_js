<?php

/*

Comptez le nombre de fois que 1 apparait dans le tableau suivant
*/
$data = [1, 10, 1, 12, 45, 89, 100, 120, 1, 145, 200, 1, 247, 1, 300, 458, 1, 1];

$count = 0; // variable 
foreach ($data as $num) {
    if ($num == 1) $count++;
}

echo PHP_EOL;
echo $count;
echo PHP_EOL;

// parcourir le tableau suivant et compter le nombre de 1
$data2d = [
    [1, 1, 2],
    [11, 12, 21],
    [11, 1, 2],
    [10, 1, 2],
];
