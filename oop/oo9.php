<?php
abstract class OurClass{
    final function doSomething(){
       echo "Doing Something";
   }
}

class MyClass extends OurClass{
  
}
$mc = new MyClass();
$mc->doSomething();