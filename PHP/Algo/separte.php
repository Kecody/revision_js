<?php

$data =  [5, 3, 11, 22, 121, 2, 11];

$seprate = [];

// 1 Récupérer les nombre selon un critère : que des multiple de 11

foreach($data as $number){
    if( $number % 11 == 0 ){
        $seprate[] = $number;
    }
}

echo PHP_EOL;
print_r($seprate);
echo PHP_EOL;

// 2 Les récupérer qu'une fois

// Il faut vérifier que l'élément n'est pas dans le tableau avant de le pusher et si il n'est pas présent on le récupère effectivement.