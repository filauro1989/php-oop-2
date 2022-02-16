<?php 

    trait Premiumuser 
    {

        protected $level;
        

        public function __construct($level)
        {
                try {
                $this->$level = $level;
                } 
                catch (TypeError $error) {
                        throw new Exception ($error->getMessage());
                }
        }


        /**
         * Get the value of level
         */ 
        public function getLevel()
        {
                return $this->level;
        }

        /**
         * Set the value of level
         *
         * @return  self
         */ 
        public function setLevel($level)
        {
                if ($level == "bronze") {
                        $this->level = 30;
                } else if ($level == "silver") {
                        $this->level = 45;
                } else if ($level == "gold") {
                        $this->level = 60;
                }
                return $this;
        }
    }

?>