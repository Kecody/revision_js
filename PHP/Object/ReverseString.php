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
        // on peut parcourir une phrase comme un tableau
        // $this->phrase
    }
}

$reverse1 = new ReverseString("Bonjour");
echo $reverse1->getPhrase();
echo PHP_EOL;

$reverse2 = new ReverseString("Hello");
echo $reverse2->getPhrase();
echo PHP_EOL;