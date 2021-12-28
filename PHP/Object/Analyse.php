<?php

$file =  "./Data/titanic.csv" ;
// $handle = fopen($file, "r"); // ouvre une ressource avec l'adresse du fichier

// // tant que je n'arrive pas à la fin du fichier je boucle
// while(!feof($handle)){
//     // lire les données ligne par ligne
//     $content =  fgets($handle);
//     print_r(explode(",", $content));
//     echo PHP_EOL ;
//     break;
// }

// fclose($handle); // on ferme le fichier lu

// Pour lire un fichier csv avec la fonction fgetcsv de PHP

// ré-ouvre la ressource
$handle = fopen($file, "r"); 

// l'assignation se fait avant l'évaluation dans le while pour arrêter la boucle

// je récupère la première ligne lecture ligne par ligne, à la fin il retourne false quand fgetcsv n'a plus rien à lire 
$data = fgetcsv($handle, 1000, ",");
print_r($data);
$survived = 0;
while( $data = fgetcsv($handle, 1000, ",") ){
    $survived += $data[1];
}

echo "survived $survived";
echo PHP_EOL ;
fclose($handle);

// Exercice 01 
// Comptez le nombre de survivant sur le titanic sachant que survivre 1 et ne pas survivre c'est 0
