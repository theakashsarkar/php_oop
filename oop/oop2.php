<?php 
class Fund{
    public $fund;
    public function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }
    public function addFund($money){
       $this->fund += $money;
    }
    public function deductFund($money){
        $this->fund -= $money;
    }
    public function getTotalMoney(){
        echo "Total Money {$this->fund}";
    }
}
$ourFund = new Fund(100);
$ourFund->addFund(200);
$ourFund->deductFund(100);
$ourFund->getTotalMoney();
