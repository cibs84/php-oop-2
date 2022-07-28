<?php

class Customer {

    public $name;

    public $lastname;

    public $email;

    public $selectedProducts = [];

    public $balance;

    public $discount;

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }
}

?>