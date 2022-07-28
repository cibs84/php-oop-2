<?php

class Product {

    public $name;

    public $manufacturer;

    public $productCategory;

    public $animalCategory;

    public $price;

    public $image;

    public function __construct($_name, $_animalCategory, $_price) {
       $this->nome = $_name; 
       $this->animalCategory = $_animalCategory;
       $this->price = $_price;
    }
}
?>