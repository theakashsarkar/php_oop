<?php
class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} eating\n";
    }
    
    public function run(){
        echo "{$this->name} is running\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }
    
    public function greet(){}

    public function addTitle(string $title){
        $this->name = $title . " " . $this->name;
    }
}

class Human extends Animal{
    public function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} HI\n";
    }
}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} Meow\n";
    }
}
$H1 = new Human("Akash");
$H1->greet();
$C1 = new Cat("Tom");
$C1->greet();