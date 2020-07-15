<?php
class MotorCycle{
    private $displacement,$capacity,$mileage;
    function __construct($displacement,$capacity,$mileage){
        $this->displacement = $displacement;
        $this->capacity = $capacity;
        $this->mileage = $mileage;
    }
    function getDisplacement(){
        return $this->displacement;
    }
    function setDisplacement(){
        $this->displacement =
    }
}