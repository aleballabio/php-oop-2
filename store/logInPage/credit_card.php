<?php 

class Credit_Card {
    private $CVV;
    private $expire_date;
    private $cardNumber;

    private $name;

    private $type;

    public function __construct($_name, $_cardNumber, $_CCV, $_expireDate)
    {
        $this->name = $_name;
        $this->cardNumber = $_cardNumber;
        $this->CVV = $_CCV;
        $this->expireDate = $_expireDate;
    }

    /**
     * Get the value of _expireDate
     */ 
    public function get_expireDate()
    {
        return $this->_expireDate;
    }

    public function checkExpireDate() {
        $today = date("m/Y");
        if (strtotime($this->expireDate) < strtotime($today)) {
        }
        else {
           die();
        }
    }
}