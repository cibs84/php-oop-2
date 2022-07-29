<?php

require_once __DIR__ . '/Customer.php';

class RegisteredCustomer extends Customer {
    // override
    public $discount = 20;
}

?>