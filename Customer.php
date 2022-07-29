<?php

class Customer {

    public $name;

    public $lastname;

    public $email;

    public $selectedProducts = [];

    public $balance = 0;

    public $discount = 0;

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function addProduct($product) {
        $this->selectedProducts[] = $product;
    }

    public function getSelectedProducts() {
        return $this->selectedProducts;
    }

    public function calcFinalPrice() {
        // Calculate the sum of the prices of the selected products
        $sumPrices = 0;
        foreach($this->selectedProducts as $thisProduct) {
            $sumPrices += $thisProduct->price;
        }

        // Apply the discount
        $finalPrice = $sumPrices - ($sumPrices * $this->discount / 100);

        return $finalPrice;
    }

    public function makePayment($prepaidCard) {
        $finalPrice = $this->calcFinalPrice();
        if (($prepaidCard->balance === null ? $this->balance : $prepaidCard->balance) < $finalPrice) {
            die('<h2>Saldo non disponibile</h2>');
        } else {
            return 'ok';
        }
    }
}
?>