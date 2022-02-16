<?php 

        require_once __DIR__ . "/Card.php";
        require_once __DIR__ . "/../traits/Premiumuser.php";

        class User 
    {

        use Premiumuser;
        protected $name;
        protected $lastName;
        protected $address;
        protected $phoneNumber;
        protected $email;
        protected $card;

        public function __construct($name, $lastName, $email, $card)
        {
                try {
                $this->name = $name;
                $this->lastName = $lastName;
                $this->email = $email;
                $this->setCard($card);
                } 
                catch (TypeError $error) {
                        throw new Exception ($error->getMessage());
                }
        }


        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of lastName
         */ 
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         *
         * @return  self
         */ 
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress()
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }

        /**
         * Get the value of phoneNumber
         */ 
        public function getPhoneNumber()
        {
                return $this->phoneNumber;
        }

        /**
         * Set the value of phoneNumber
         *
         * @return  self
         */ 
        public function setPhoneNumber($phoneNumber)
        {
                $this->phoneNumber = $phoneNumber;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of card
         */ 
        public function getCard()
        {
                return $this->card;
        }

        /**
         * Set the value of card
         *
         * @return  self
         */ 
        public function setCard(Card $card)
        {
                $this->card = $card;

                return $this;
        }
    }

?>