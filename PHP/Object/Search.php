<?php

class Search{

    private $numbers = [];

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function find(int $number){
        // trouver la position du nombre number 

        foreach($this->numbers as $k => $v){
            if($number == $v){

                return $k;
            }
        }

        return null;
    }
}

/*
Exercice 
1. 
La classe Search permet de trouver un élément dans une liste de nombres. Elle possède une méthode find qui prend un paramètre entier et qui retourne la position si elle existe de l'élément dans le tableau numbers.

2. Remplacez une valeur par une autre dans le tableau $numbers
replace($n, $r)
la méthode replace cherche $n dans le tableau numbers et remplace cette valeur par $r, si la valeur n'existe pas ($n ) la méthode ne fait rien.
*/

$search = new Search([9,10,11,4, 7, 8, 100]);

echo $search->find(4); // 3
echo PHP_EOL;
echo $search->find(13) == null ? "rien trouvé" : "Oui il y a ce nombre dans numbers" ; // null
echo PHP_EOL;
