<?php 

$file =  "./Data/titanic.csv" ;

// ré-ouvre la ressource
$ressource = fopen($file, "r"); 

while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data);
}

// 01 Exercice 

// Affichez l'age des passagés

