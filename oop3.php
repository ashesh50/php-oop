<!-- Public and Private -->

<?php
class Fund{

    // public $fund;
    private $fund;
    function __construct($initialFund = 0){
        $this -> fund = $initialFund;
    }
    public function addFund($money){
        $this -> fund += $money;
    }
    public function deductFund($money){
        $this -> fund -= $money;
    }
    public function getTotal(){
        echo "Total fund is {$this -> fund}\n";
    }
}

$ourFund = new Fund(200);
// $ourFund->fund = 500; // Direct access to public property
$ourFund->getTotal();
$ourFund->addFund(100);
$ourFund->deductFund(10);
$ourFund->getTotal();