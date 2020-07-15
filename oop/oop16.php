<?php
class student {
    private $name;
    private $age;
    private $class;

    function __construct( $name = 0, $age = 0, $class = 0 ) {
        $this->name  = $name;
        $this->age   = $age;
        $this->class = $class;
    }
    public function __get($name){
        return strtoUpper($this->$name);
    }
    public function __set($name, $value)
    {
       $this->$name = $value; 
    }

    // function getName(){
    //   return $this->name;
    // }
    // function setName($name = 0){
    //   $this->name = $name;
    // }
    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age = 0){
    //     $this->age = $age;
    // }
    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class = 0){
    //     $this->class = $class;
    // }
}
$r = new Student('Akash','30','10');
$r->name = "Kamal";
echo $r->name;

