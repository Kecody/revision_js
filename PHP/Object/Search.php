<?php

class Search{

    private $numbers = [];

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function find(int $number){

    }
}

/*
La classe Search permet de trouver un élément dans une liste de nombres. Elle possède une méthode find qui prend un paramètre entier et qui retourne la position si elle existe de l'élément dans le tableau numbers.
*/

$search = new Search([9,10,11,4, 7, 8, 100]);

$search->find(4); // 3
echo PHP_EOL;
$search->find(13); // null
echo PHP_EOL;
