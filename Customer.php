<?php
require_once __DIR__ . '/PurchaseOption.php';
class Customer {

    use PurchaseOption;

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

    public function addProduct($product, $quantity) {
        for ($i=1; $i <= $quantity; $i++) { 
            $this->selectedProducts[] = $product;
        }
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

        $this->setShippingCost($finalPrice);
        
        return $finalPrice + $this->getShippingCost();
    }

    public function makePayment($prepaidCard) {
        // $finalPrice = $this->calcFinalPrice() + $this->getShippingCost();
        if (($prepaidCard->balance === null ? $this->balance : $prepaidCard->balance) < $this->calcFinalPrice()) {
            die('<h2>Saldo non disponibile</h2>');
        } else {
            return 'ok';
        }
    }
}
?>