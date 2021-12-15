<?php

class Cart{
    private $products = [];

    public function addProduct($price, $quantity){

        // on ajoute en arrondissant le prix X  quantité avec deux décimales après la virgule
        $this->products[] = round ( $price * $quantity, 2 );
    }

    public function total(){
        $total = 0.0 ;

        foreach($this->products as $price){
            $total += $price;
        }

        return $total;
        
        // return array_sum($this->products);
    }
}

$cart = new Cart;

$cart->addProduct(10, 10);
$cart->addProduct(5, 10);
$cart->addProduct(3.5, 10);

echo $cart->total();
echo PHP_EOL;
