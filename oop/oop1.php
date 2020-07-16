<?php
class Human{
  public $name;
  public $age;
  public function __construct($personName,$personAge = 0){
      echo "New human is create\n";
      $this->name = $personName;
      $this->age = $personAge;
    }
    public function sayHi(){
       echo "salam";
    }
    public function sayName(){
        if($this->age){
            echo "My Name Is {$this->name}\nI am {$this->age} years old";
        }else{
            echo "My Name Is {$this->name}\n, I don't know how old i am";
        }
        
    }
}
$h1 = new Human("Sujan");
// $h1->name = "Hasin";
// $h2 = new Human("kamal");
$h1->sayName();
// $h2->sayName();
 