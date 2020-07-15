<?php
class Shape{

}
class Shapes{
    private $shapes;
    public function __construct(){
        $this->shapes = array();
    }
    
    function addShape(Shape $shape){
        array_push($this->shapes,$shape);
    }

    function totalShape(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}

class Students{

}
$shapesCollection = new Shapes();
$shapesCollection->addShape(new Rectangle());
$shapesCollection->addShape(new Triangle());
// $shapesCollection->addShape(new Students());

echo $shapesCollection->totalShape();
