<?php 

class Product{
    private $price ;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function setPriceTTC($tva){
        // mettre le prix TCC
    }

    public function getPrice(){
        // affiche le prix TTC ou pas 
    }
}


$apple = new Product(0.5);

/*
Exercice Créez un produit (c'est fait) et 
1. définir une tva pour le calcul TTC du prix
2. Affichez le prix TTC
*/