<?php

class Product {

    public $nome;

    public $marca;

    public $categoriaAnimale;

    public $prezzo;

    public $immagine;

    public function __construct($_categoriaAnimale, $_nome, $_prezzo) {
       $this->nome = $_nome; 
       $this->categoriaAnimale = $_categoriaAnimale;
       $this->prezzo = $_prezzo;
    }
}
?>