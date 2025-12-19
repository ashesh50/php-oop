<?php

class Human{
    function sayHi(){
        echo "Salam\n";
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
$ci = new Cat();
$di = new Dog();

$h1 -> sayHi();
$ci -> sayHi();
$di -> sayHi();