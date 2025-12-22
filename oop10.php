<!-- Discussion of Interfaces -->

<?php

interface BaseAnimal{
    function isAnimal();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAnimal(){
    }
    function canEat($param1, $param2){
    }
    function breed(){
    }
}

interface BaseHuman{
    function canTalk();
}



$cat = new Animal();
echo $cat instanceof BaseAnimal ; // true

// echo $h instanceof BaseAnimal ;

abstract Class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am Eating";
    }
}

class Human extends AbstractHuman{
    function isAnimal(){
    }
    function canEat($param1, $param2){
    }
    function breed(){
    }
    function canTalk(){
    }
    function run(){
    }

}

$h = new Human();