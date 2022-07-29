<?php

trait PurchaseOption {

    protected $shippingCost = 5;

    public function setShippingCost($finalPrice) {
        if ($finalPrice > 58) {
            $this->shippingCost = 0;
        }  
    }

    public function getShippingCost() {
        return $this->shippingCost;
    }
}

?>