<?php
// function __autoload($name){
//    if(!class_exists($name)){
//        include "{$name}.php";
//    }
//    echo $name;
// }
function autoLoad($name){
    if(strpos($name,'planet')!== false){
        $fileName = str_replace("planet","",$name);
        include "planet/${name}.php";
    }else{
        
    }
}
spl_autoload_register('autoLoad');
(new spachShip)->lanch();
(new bike)->getType();