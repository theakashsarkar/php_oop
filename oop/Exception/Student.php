<?php
class Student {
    function __construct( $name, $age ) {
        $this->name = $name;
        if ( $age < 3 ) {
            throw new Exception( "Too Young", 1001 );
        }elseif($age > 35){
          throw new Exception("Too Old",1002);
        }
        $this->age = $age;
    }
}
try {
// //    $E = new Student('akash',5);
    $e = new Student( 'akash',36 );
    echo "i will never run";

} catch ( Exception $e ) {
    echo $e->getCode().":".$e->getMessage();
} finally {

}
$e = new Student( 'akash', 9 );