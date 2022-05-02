<?php
    class TransportMean
    {
        private $maxVelocity;
        private $weight;
        private $nPassengers;
        private $builder;
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

    }

    $obj = new Authovehicle();
    // $obj->nTires = 150;
    $obj->modifyWeight(200);

    
    // var_dump($weight);
    $obj->setBuilder('fiat');
    var_dump($obj);








    
    ?>
  