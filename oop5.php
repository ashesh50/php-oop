<!-- inheritance -->
<?php
class ParentClass {
    protected $name;
    function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }
    function sayHi(){
        echo "Hi, I am " . $this->name . "\n";
    }
}

class ChildClass extends ParentClass {
    function sayHi(){
        parent::sayHi();
        echo "Hello";
    }
}

$cc = new ChildClass("John");