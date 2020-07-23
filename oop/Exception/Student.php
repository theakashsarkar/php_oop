<?php
class Student{
	function __construct($name,$age){
       $this->name = $name;
       if($age < 3){
       	 neException("Error Processing Request", 1);
       	 
       }
       $this->age  = $age;

	}
}