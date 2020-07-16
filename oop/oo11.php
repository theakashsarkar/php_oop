<?php
interface BaseAnimal{
    function isAlive();
    function canEat();
    function breed();
}
class Animal implements BaseAnimal{
    function isAlive(){

    }
    function canEat(){

    }
    function breed(){

    }
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

abstract class abstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am Eacting";
    }
}

class Human extends abstractHuman{
    function canTalk(){
        echo "HI Akash";
    }
    function isAlive(){

    }
    function canEat(){

    }
    function breed(){

    }
    function run()
    {
        
    }
}
$h = new Human();
echo $h instanceof BaseHuman;