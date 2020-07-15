<?php
class Human {
    function sayHi(){
        echo "Salam";
    }
}
class cat{
   function sayHi(){
       echo "Meowe";
   }
}
class Dog{
  function sayHi(){
      echo "woof";
  }
}
$ame = new Human();
$ame ->sayHi();
$c = new cat();
$c->sayHi();
$d1 = new Dog();
$d1 ->sayHi();