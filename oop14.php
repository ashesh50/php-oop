<!-- Discussion of static scope -->

<?php

class A{
    protected static $name;
    static function sayHi() {
        self::$name= "Hello\n";
        echo "Hi From A\n";
    }
}

class B extends A{
    static function sayHi() {
        parent::sayHi(); // calling parent class static method
        echo parent::$name;
        echo "Hi From B\n";
    }
}

B::sayHi(); // static method call from child class