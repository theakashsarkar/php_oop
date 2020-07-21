<?php
class MyExecption extends Exception{}
class NetworkExecption extends Exception{}

function testException(){
    throw new MyExecption();
} 
try{
    testException();
}catch(MyExecption $e){
    echo "My Execption caught";
}catch(NetworkExecption $e){
    echo "Network Execption Caught";
}catch(Exception $e){
    echo "Execption caught";
}finally{
    echo "\nCleaned up";
}