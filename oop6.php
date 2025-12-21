<!-- inheritance2 -->
<?php
abstract class ParentClass {
    protected $name;
    protected $area;

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    abstract protected function calculateArea();
}

class Triangle extends ParentClass {
    private $a, $b, $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    protected function calculateArea(){
        $p = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
}

class Rectangle extends ParentClass {
    private $a, $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }

    protected function calculateArea(){
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(4, 5);
$r->getArea();

$tr = new Triangle(4, 5, 6);
$tr->getArea();
