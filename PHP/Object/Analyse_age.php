<?php 

$file =  "./Data/titanic.csv" ;

// ré-ouvre la ressource
$ressource = fopen($file, "r"); 

while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data);
}

// 01 Exercice 
// Affichez l'age des passagés
$ressource = fopen($file, "r"); 
$data = fgetcsv($ressource, 1000, ",");

while( $data = fgetcsv($ressource, 1000, ",") ){
    print_r($data[5]);
}
// 02 Exercice 
// Faire la somme de tous les ages et calculer la moyenne des ages