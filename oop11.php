<!-- Static methods and properties of classes -->
<?php
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n) {
        self :: doSomething();
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething() {
        echo "Doing something \n";
    }

    function factorial($n) {
        self::$name = "ASDF";
        self::doSomething();
        $this -> doSomething();
        $this ->number = $n;
        echo "Calculating factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
// $mathc->fibonacci(9); // object method call
$mathc->factorial(7); // object method call

MathCalculator::fibonacci(7); // static method call
echo MathCalculator::$name; // static property access