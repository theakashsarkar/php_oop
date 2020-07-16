<?php
function search($search,$string){
 $position = stripos($string,$search);
    if($position == true){
        return "Found at position {$position}";
    }else{
        return "Not Found";
    }
}
//Drive code
$search = "Hello akash";
$string = "Hello Akash";
echo search($search,$string);
// function Search($search, $string){ 
//     $position = stripos($string, $search, 5);   
//     if ($position == true){ 
//         return "Found at posiion " . $position; 
//     } 
//     else{ 
//         return "Not Found"; 
//     } 
// } 
  
// // Driver Code 
// $string = "Hello akash"; 
// $search = "akash"; 
// echo Search($search, $string); 