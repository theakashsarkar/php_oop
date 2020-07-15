<?php
abstract class Shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this->name = $name;
        $this->calculterArea();
    }

    public function getArea(){
        echo "This {$this->name}'s is area {$this->area}";
    }

   abstract public function calculterArea();
}

class Triangle extends Shape{
    private $a,$b,$c;
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculterArea(){
        $perimeter = ($this->a+$this->b+$this->c);
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }
}

class RectAngle extends Shape{
    private $a,$b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("RectAngle");
    }

    public function calculterArea()
    {
        $this->area = $this->a * $this->b;
    }
}
$r = new RectAngle(2,4);
$t = new Triangle(10,12,8);
$t->getArea();