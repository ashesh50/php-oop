<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
    }
    function getName(){

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
$h1-> name = "Raki\n";
$ci = new Cat();
$di = new Dog();

$h1 -> sayHi();
echo $h1->name;
// $ci -> sayHi();
// $di -> sayHi();