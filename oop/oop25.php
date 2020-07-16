<?php
class MotorCycle{
    private $parameters;
    function __construct($displacement,$capacity,$mileage){
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }
    // function getDisplacement(){
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement){
    //     $this->parameters['displacement'] = $displacement;
    // }
    function __toString(){
        return $this->parameters['displacement'];
    }
    function __isset($name){
        if(!isset($this->parameters['name'])){
            echo "{$name} Is Not Found"."\n";
            return false;
        }
        return true;
    }
    function __unset($name){
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    function __get($name){
        echo $this->parameters[$name];//$this->displacement;
    }
    function __set($name,$value){
        $this->parameters[$name] = $value;
    }
    function __call($name,$argument){
        if('run' == $name){
            if($argument){
                echo "I am running{$argument[0]}";
            }
        }else{
            echo "Not found";
        }
    }
    static  function  __callStatic($name,$argument){
        echo "static call";

    }
}
MotorCycle::wash();

$pulsar = new MotorCycle('150cc','13ltr','40mph');
// echo $pulsar->displacement = '200cc';
if(isset($pulsar->trieSize)){
    echo $pulsar->trieSize;
}else{
    echo "Found";
}
unset($pulsar->mileage,$pulsar->capacity);
$pulsar->run('100kmph');