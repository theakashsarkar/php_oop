<?php
class A{
    static function sayHi(){
        echo "I am a";
    }
}
class B extends A {
    static function sayHi(){
        echo "i am b\n";
        parent::sayHi();
    }
    // parent::sayHi();
}
B::sayHi();