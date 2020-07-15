<?php
class DistrictCollection implements IteratorAggregate {
    private $district;
    
    public function __construct(){
        $this->district = array();
    }

    public function addDistrict(String $district){
        array_push($this->district,$district);
    }
    
    // public function getDistrict(){
    //     return $this->district;
    // }

    public function getIterator(){
        return new ArrayIterator($this->district);
    }
}
$district = new DistrictCollection();
$district->addDistrict('chandpur');
$district->addDistrict('motloab');
$district->addDistrict('Bogra');
$district->addDistrict('sylheet');
foreach($district as $district){
    echo $district."\n";
}


