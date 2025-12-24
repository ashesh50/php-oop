<!-- Magic Methods in PHP Classes -->
<?php

class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age='', $class='') {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop) {
        return $this->$prop;
    }
    public function __set($prop, $value) {
        $this->$prop = strtoupper($value);
    }

    // function getName() {
    //     return $this->name;
    // }
    // function setName($name) {
    //     $this->name = $name;
    // }
    // function getAge() {
    //     return $this->age;
    // }
    // function setAge($age) {
    //     $this->age = $age;
    // }
    // function getClass() {
    //     return $this->class;
    // }
    // function setClass($class) {
    //     $this->class = $class;
    // }
}

$R = new Student("Rahim", 15, "Ten");
// $R = new Student();
// $R->setName("Karim");

$R->name = "Karim"; // Using __set magic method

echo $R->name;