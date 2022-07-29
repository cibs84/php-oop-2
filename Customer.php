<?php
require_once __DIR__ . '/PurchaseOption.php';
class Customer {

    use PurchaseOption;

    public $name;

    public $lastname;

    public $email;

    private $selectedProducts = [];

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

        // Set Shipping Cost
        $this->setShippingCost($finalPrice);
        
        // Return the final price with the shipping cost
        return $finalPrice + $this->getShippingCost();
    }

    public function makePayment($prepaidCard) {
        if ((is_null($prepaidCard) ? $this->balance : $prepaidCard->balance) < $this->calcFinalPrice()) {
            throw new Exception("Saldo non disponibile");
        } else {
            return 'ok';
        }
    }
}
?>