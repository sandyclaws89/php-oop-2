<?php
    class TransportMean
    {
        private $maxVelocity;
        private $weight;
        private $nPassengers;
        protected $builder;
        private $destinationUse;

        public function __construct($builder)
        {
            $this->builder = $builder;
        }

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

        public function __construct($builder, $nTires)
        {
            parent::__construct($builder);
            $this->nTires = $nTires;
        }

        public function modifyWeight($newWeight)
        {
            $this->weight = $newWeight;
        }

        public function setBuilder($builder)
        {
            parent:: setBuilder($builder);
            $this->nTires++;
        }

    }

    $obj = new Authovehicle('renault', 6);
    // $obj->nTires = 150;
    // $obj->modifyWeight(200);
    // var_dump($weight);
    $obj->setBuilder('ford');
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
        private $registered;
        private $discount;
        private $cardExpiration;
        public function __construct($registered, $cardExpiration)
        {
            $this->registered = $registered;
            $this->cardExpiration = $cardExpiration;
            if($registered){
                $this->discount = 20; 
            }
            if ($cardExpiration <= date("d/m/Y"))
            {
                echo "La carta è scaduta";
            }
        }
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
        private $tot;
       
    }
    class buyerRegisteredUser extends user
    {
        private $discountedTransaction;
        private $tot;
    }

    $purchase = new user (true, 22/11/2011);
        var_dump($purchase);
        // echo date ("d/m/Y");

?>

  