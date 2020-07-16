<?php
define("ok",123);
class Myclass{
    const CITY = "Dhaka";
    function sayHi(){
        echo "Hi From".' '.self::CITY;
    }
}
$m = new MyClass();
echo $m::sayHi();
echo ok;