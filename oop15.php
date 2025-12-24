<!-- Creating constants in classes -->

<?php
class MyClass{
    const CITY = "Dhaka";

    function sayHi() {
        echo "Hi From " .self::CITY;
    }
}

$m = new MyClass();
$m->sayHi(); // Accessing constant using self keyword
// echo MyClass::CITY . "\n"; // Accessing constant using class name