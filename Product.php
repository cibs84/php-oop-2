<?php

class Product {

    public $name;

    public $manufacturer;

    public $productCategory;

    public $animalsCategory;

    public $price;

    public $image;
    
    public $description;

    public function __construct($_name, $_animalsCategory, $_price) {
       $this->nome = $_name; 
       $this->animalsCategory = $_animalsCategory;
       $this->price = $_price;
    }
}
?>