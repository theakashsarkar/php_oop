<?php
class Bike{
    public $motorBike;
    public function __construct($motorBike){
        $this->motorBike = $motorBike;
    }

    public function setMotorBike($motorBike){
        $this->motorBike = $motorBike;
    }
    // public function __toString(){
    //     // return "My Bike {$this->motoBike}";
    //     return $this->motorBike;
    // }
}
$b1 = new Bike('FZ');
echo (string) $b1;