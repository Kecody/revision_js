<?php 

$file =  "./Data/titanic.csv" ;

// ré-ouvre la ressource
$ressource = fopen($file, "r"); 

$data = fgetcsv($ressource, 1000, ",");
print_r($data[5]);
die;
while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data[5]);
    echo PHP_EOL;
}

// 01 Exercice 
// Affichez l'age des passagés
$ressource = fopen($file, "r");  // r en lecture seule 
$data = fgetcsv($ressource, 1000, ",");

while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data[5]);
    echo PHP_EOL;
}

fclose($ressource); // fermer la ressource

// 02 Exercice 
// Faire la somme de tous les ages et calculer la moyenne des ages

$sumAge = 0;
$count = 0;

$ressource = fopen($file, "r"); // r en lecture seule 
$data = fgetcsv($ressource, 1000, ",");

while( $data = fgetcsv($ressource, 1000, ",") ){
    $sumAge +=  (float) $data[5] ;
    $count++;
}

print_r(round( $sumAge/$count, 2 ));
echo PHP_EOL;