<?php 
    class registeredUser extends User {
        private $dateOfBirth;
        private $email;
        private $password;
        private $username;

        private $discount = (20);

        public function __construct($_name, $_email, $_country, $_password, $_username, $_surname, $_dateOfBirth)
        {
            $this->name = $_name;
            $this->email = $_email;
            $this->surname = $_surname;
            $this->password = $_password;
            $this->username =$_username;
            $this->country = $_country;
            $this->dateOfBirth = $_dateOfBirth;
        }
    }