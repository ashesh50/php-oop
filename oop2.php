<?php

class Human{
    public $name;
    public $age;
    public function __construct($personName, $personAge = 0){
        // echo "New Human object Is Created\n";
        $this -> name = $personName;
        $this -> age = $personAge;
    }
    public function sayHi(){
        echo "Salam\n";
        $this -> sayName();
    }
    public function sayName(){
        if($this->age){
            echo "My name is {$this -> name}, I am {$this -> age} years old\n";
        }
        else{
            echo "My name is {$this -> name}, I don't know how old I am\n";
        }
    }
}

$hi = new Human("Ali", 12);
$h2 = new Human("Sara", 10);
$h3 = new Human("Omid", );
$hi -> sayHi();
$h2 -> sayHi();
$h3 -> sayHi();