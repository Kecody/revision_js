<?php

$file =  "./Data/titanic.csv" ;
$handle = fopen($file, "r"); // ouvre une ressource 

// tant que je n'arrive pas à la fin du fichier
while(!feof($handle)){
    // lire les données ligne par ligne
    echo fgets($handle);
    echo PHP_EOL ;
}

fclose($handle); // on ferme le fichier lu