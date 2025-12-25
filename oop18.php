<!-- Countable Interface - Pretty cool -->
<?php
class DistrictCollection implements IteratorAggregate, Countable
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

    function count(): int
    {
        return count($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Natore");
$districts->add("Pabna");
$districts->add("Dinajpur");
$districts->add("Thakurgaon");

echo count($districts);