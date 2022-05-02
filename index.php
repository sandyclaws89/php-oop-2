<?php
    class TransportMean
    {
        private $maxVelocity;
        private $weight;
        private $nPassengers;
        protected $builder;
        private $destinationUse;

        public function getBuilder()
        {
            return $this->builder;
        }

        public function setBuilder($builder)
        {
            $this->builder = $builder;
            return $this;
        }
    } 

    class Authovehicle extends TransportMean
    {
        private $nTires;

        public function modifyWeight($newWeight)
        {
            $this->weight = $newWeight;
        }
        public function setBuilder($builder)
        {
            $this->builder = $builder;
            return $this;
        }

    }

    $obj = new Authovehicle();
    // $obj->nTires = 150;
    // $obj->modifyWeight(200);

    
    // var_dump($weight);
    $obj->setBuilder('fiat');
    var_dump($obj);

?>

<?php
    class product
    {
        private $id;
        private $price;
        private $type;
        private $animalType;
        private $availability;
    } 
    class food extends product
    {
        private $expirationDate;
        private $packingDate;
        private $ingredients;
    }
    class accessories extends product
    {
        private $material;
    }

    class user 
    {
        private $idVisiter;
        private $visitDate;
        
    }
    class registeredUser extends user
    {
        private $idAccount;
        private $accountName;
        private $registrationDate;
        private $email;
    }
    class buyerUser extends user
    {
        private $transaction;
    }
    class buyerRegisteredUser extends user
    {
        private $discountedTransaction;
    }

  