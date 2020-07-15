<?php
class ParantClass{
    protected $name;
    public function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }
    
    public function sayHi(){
        echo "HI {$this->name}\n";
    }
}
class ChileClass extends ParantClass{
    public function sayHi(){
        parent::sayHi();
        echo "hello";
    }
}
$cc = new ChileClass("akash");
