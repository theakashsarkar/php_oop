<?php
class MathCulcaltor{
    static $number;
    static function fibonacci($n){
        self::$number = 2;
        self::doSomething();
        echo "Fibonacci Serices {$n}\n";
    }
    static function doSomething(){
        echo "Doing Something";
    }
    function factorial($n){
        echo "Culcaltor Factorial {$n}\n";
    }
}
$mathCulcaltor = new MathCulcaltor();
$mathCulcaltor->fibonacci(7);
MathCulcaltor::fibonacci(89);