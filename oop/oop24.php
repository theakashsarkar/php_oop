<?php
class Planet{
    static function echoName(){
        echo static::getName();
    }
    static function getName(){
        echo "Planet";
    }
}
class Earth extends Planet{
    static function getName(){
        echo "Earth";
    }
}

Earth::echoName();

