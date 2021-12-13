<?php

class Calcul{

    private $result = 0;

    public function add($num1, $num2){
        $this->result = $num1 + $num2;
    }

    public function getResult(){
        
        return $this->result;
    }

    public function sum($numbers){
        // faire 
    }
}

/*

Exercice 

1. écrire le code utile dans la méthode add qui ajoute deux valeurs à la variable  de classe $result. La méthode getResult affiche la valeur calculé par la méthode add.

2. Implémentez (faire le code) de la méthode sum de la classe Calcul, elle fera la somme des valeurs numériques d'un tableau, le résultat sera assigné à notre variable de classe $result (comme la méthode add). La méthode getResult continuera à afficher le resultat.
*/

$calculatrice = new Calcul();

$calculatrice->add(1,2);
echo $calculatrice->getResult();
echo PHP_EOL;

echo $calculatrice->sum([1,2,3,4,5]);
echo $calculatrice->getResult();
echo PHP_EOL;