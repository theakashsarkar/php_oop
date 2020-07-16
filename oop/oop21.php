<?php
class MotorBike{
    public $motorBike;
    public function __construct($motorBike){
        $this->motorBike = $motorBike;
    }
    
    public function setMotorBike($motorBike){
        $this->motorBike = $motorBike;
    }
}
class Bike{
    public $bike;
    public $motorBike;
    public function __construct($bike,$motorBike){
        $this->bike = $bike;
        $this->motorBike = new MotorBike($motorBike);
    }
    public function updateBike($motorBike){
        $this->motorBike->setMotorBike($motorBike);
    }
    public function __clone(){
        $this->motorBike = clone $this->motorBike; 
    }
}
$bike1 = new Bike('TVS','RTER');
print_r($bike1);
$bike2 = clone $bike1;
// print_r($bike2);
$bike2->updateBike('FZ');
print_r($bike2);
print_r($bike1);
