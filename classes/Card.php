<?php 

    class Card 
    {
        protected $number;
        protected $expirationDate;
        protected $cvv;

        public function __construct($number, $cvv, $expirationDate) {
            try {
                $this->number = $number;
                $this->cvv = $cvv;
                $this->expirationDate = $expirationDate;
                    
            } catch (TypeError $error) {
                throw new Exception ($error->getMessage());
            }    
        }

        


        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        /**
         * Get the value of expirationDate
         */ 
        public function getExpirationDate()
        {
                return $this->expirationDate;
        }

        /**
         * Set the value of expirationDate
         *
         * @return  self
         */ 
        public function setExpirationDate($expirationDate)
        {
                $this->expirationDate = $expirationDate;

                return $this;
        }

        /**
         * Get the value of cvv
         */ 
        public function getCvv()
        {
                return $this->cvv;
        }

        /**
         * Set the value of cvv
         *
         * @return  self
         */ 
        public function setCvv($cvv)
        {
            if (!is_numeric($cvv)){
                throw new Exception('Is not a number');
            }
                $this->cvv = $cvv;

                return $this;
        }
    }

?>