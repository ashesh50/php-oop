<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this -> sayName();
    }
    function sayName(){
        echo "My name is {$this -> name}";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1-> name = "Raki\n"; //set
$h2-> name = "Rahul"; //set
// $ci = new Cat();
// $di = new Dog();

$h1 -> sayHi();
// $h1->sayName();
// echo $h1->name; //get
// $ci -> sayHi();
// $di -> sayHi();

$h2 -> sayHi();
// $h2->sayName();
// echo $h2->name;