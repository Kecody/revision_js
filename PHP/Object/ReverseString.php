<?php

class ReverseString{

    // variable de classe
    private $phrase = "";

    // il s'exécute lors de l'instanciation (quand tu fais un new quand tu crées un objet)
    // On peut passer un paramètre ou des paramètres à un constructeur
    public function __construct($phrase)
    {
       $this->phrase = $phrase;
    }

    public function getPhrase(){
        return $this->phrase;
    }

    public function reverse(){
        
        $phraseReverse = '' ;
        for($i = strlen($this->phrase) -1 ; $i >= 0; $i-- ){
            $phraseReverse .= $this->phrase[$i] ;
        }

        $this->phrase = $phraseReverse;
    }
}

$reverse1 = new ReverseString("Bonjour");
$reverse1->reverse();
echo $reverse1->getPhrase();
$reverse1->reverse();
echo PHP_EOL;

echo $reverse1->getPhrase();

echo PHP_EOL;

$reverse2 = new ReverseString("Hello");
$reverse2->reverse();
echo $reverse2->getPhrase();
$reverse2->reverse();
echo PHP_EOL;

echo $reverse2->getPhrase();

echo PHP_EOL;