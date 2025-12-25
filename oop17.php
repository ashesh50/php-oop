<!-- A practical example of an interface -->
<?php
// class DistrictCollection implements IteratorAggregate
// {
//     private $districts;

//     function __construct()
//     {
//         $this->districts = array();
//     }

//     function add($districts)
//     {
//          array_push($this->districts, $districts);
//     }

//     function getDistricts()
//     {
//         return $this->districts;
//     }

//     function getIterator()
//     {
//         return new ArrayIterator($this->districts);
//     }
// }

// $districts = new DistrictCollection();
// $districts->add("Rajshahi");
// $districts->add("Bogra");
// $districts->add("Natore");
// $districts->add("Pabna");

// $_districts = $districts->getDistricts();
// foreach($_districts as $district){
//     echo $district . "\n";
// }


class DistrictCollection implements IteratorAggregate
{
    private $districts = [];

    function add($district)
    {
        $this->districts[] = $district;
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Natore");
$districts->add("Pabna");
$districts->add("Dinajpur");

foreach ($districts as $district) {
    echo $district . PHP_EOL;
}
