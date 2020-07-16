<?php
abstract class Shape{
    abstract function getArea();
    abstract function getPrimeter();
}

class Rectangle extends Shape{
    private $base,$height;
    
    function __construct($base,$height){
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHight($height){
        $this->height = $height;
    }

    public function getArea(){
        return $this->base * $this->height;
    }

    public function getPrimeter(){

    }
}

class Triangle extends Shape{
   public function getArea()
   {

   }

   public function getPrimeter()
   {
       
   }
}
$triangle = new Rectangle(10,10);
echo $triangle->getArea();