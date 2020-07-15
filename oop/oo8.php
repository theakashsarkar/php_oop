<?php
abstract class OurClass{
    public function sayHi(){
        echo "HI";
    }

    abstract function myClass();
}
class MyClass extends OurClass{
    public function sayHi(){
        echo "Hello";
    }
    function myClass(){

    }
}
$mc = new MyClass();
$mc->sayHi();