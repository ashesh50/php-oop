<!-- Discussing static method overrides in child classes -->

<?php

class A{
    static function sayHi() {
        echo "Hi From A\n";
    }
}

class B extends A{
    static function sayHi() {
        echo "Hi From B\n";
        parent::sayHi(); // calling parent class static method
    }
}

B::sayHi(); // static method call from child class