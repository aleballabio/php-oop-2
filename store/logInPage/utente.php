<?php

include "../product.php";
class User
{
        private $name;
        private $surname;
        private $country;
        private $adress;
        private $phone;
        private $email;

        protected $cart = [];

        protected $cartPrice;

    /**
     * Get the value of username
     */ 

            public function __construct($_name, $_email, $_country, $_surname, $_adress)
        {
            $this->name = $_name;
            $this->email = $_email;
            $this->surname = $_surname;
            $this->country = $_country;
            $this->adress = $_adress;
        }

        /**
         * Get the value of cart
         */ 
        public function getCart()
        {
                return $this->cart;
        }

        /**
         * Set the value of cart
         *
         * @return  self
         */ 
        public function setCart($cart)
        {
                $this->cart = $cart;

                return $this;
        }
        
        
        /**
         * Get the value of cartPrice
         */ 
        public function getCartPrice()
        {
                return $this->cartPrice;
        }
        
        /**
         * Set the value of cartPrice
         *
         * @return  self
         */ 
        public function setCartPrice($cartPrice)
        {
                $this->cartPrice = $cartPrice;

                return $this;
            }

            
        public function addProduct() {
        }

        public function getTotalCartPrice() {
            $_cart = $this->cart;
            $finalPrice = 0;
            foreach ($_cart as $value) {
                $finalPrice = $finalPrice + $value['price'];
            }
            return $this->cartPrice = $finalPrice;
        }
        
        public function finalPrice() {
            $discountCart = $this->cartPrice - ($this->discount / 100);
            return $this->cartPrice = $discountCart;
            
        }
        }