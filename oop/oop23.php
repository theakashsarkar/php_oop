<?php
class Planet{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}
$e = new Planet("Earth");
// $e1 = new Planet("Earth 2");
$e1 = clone $e;
$m = new Planet("Mars");
if($e == $e1){
    echo "similer Planet\n";
}else{
    echo "Not Similer Planet\n";
}