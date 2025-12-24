<!-- A practical example of an interface -->
<?php
class DistrictCollection implements IteratorAggregate
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($districts)
    {
         array_push($this->districts, $districts);
    }

    function getDistricts()
    {
        return $this->districts;
    }
}

$districts = new DistrictCollection();
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Natore");
$districts->add("Pabna");

$_districts = $districts->getDistricts();
foreach($_districts as $district){
    echo $district . "\n";
}