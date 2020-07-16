<?php
// function __autoload($name){
//    if(!class_exists($name)){
//        include "{$name}.php";
//    }
//    echo $name;
// }
// function autoLoad($name){
//     if(strpos($name,'planet')!== false){
//         $fileName = str_replace("planet","",$name);
//         include strtolower("planet/{$fileName}.php");
//     }else{
//         include strtolower("{$name}.php");
//     }
// }
// spl_autoload_register('autoLoad');
// // (new spachShip)->lanch();
// (new planet)->planet();
// (new bike)->getType();
function autoLoad($name){
    include strtolower("{$name}.php");
}
spl_autoload_register('autoLoad');
(new spachShip)->lanch();