<?php

$file =  "./Data/titanic.csv" ;
$handle = fopen($file, "r"); // ouvre une ressource avec l'adresse du fichier

// tant que je n'arrive pas à la fin du fichier je boucle
while(!feof($handle)){
    // lire les données ligne par ligne
    $content =  fgets($handle);
    print_r(explode(",", $content));
    echo PHP_EOL ;
    break;
}

fclose($handle); // on ferme le fichier lu

// Pour lire un fichier csv avec la fonction fgetcsv de PHP

// ré-ouvre la ressource
$handle = fopen($file, "r"); 

// l'assignation se fait avant l'évaluation dans le while pour arrêter la boucle
while( $data = fgetcsv($handle, 1000, ",") ){
    print_r($data);
}

fclose($handle);
