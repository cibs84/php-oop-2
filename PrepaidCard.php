<?php

class PrepaidCard {
    public $balance = 0;

    public $owner;

    public $number;

    public $cvv;

    public $expirationDate;

    public function __construct($_owner, $_expirationDate, $_cvv, $_number) {
        $this->owner = $_owner;
        $this->expirationDate = $_expirationDate;
        $this->cvv = $_cvv;
        $this->number = $_number;
    }
}


?>