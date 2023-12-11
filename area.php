<?php
class Shape {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function calculateArea() {
        return 0;
    }
}
class Circle extends Shape {
    public $radius;
    public function __construct($radius) {
        parent::__construct("Circle");
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle extends Shape {
    public $width;
    public $length;
    public function __construct($width, $length) 
        parent::__construct("Rectangle");
        $this->width = $width;
        $this->length = $length;
    }
    public function calculateArea() {
        return $this->width * $this->length;
    }
}
class Triangle extends Shape {
    public $sideA;
    public $sideB;
    public $sideC;
    public function __construct($sideA, $sideB, $sideC) {
        parent::__construct("Triangle");
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }
    public function calculateArea() {
        $semiperimeter = ($this->sideA + $this->sideB + $this->sideC) / 2;
        return sqrt($semiperimeter * ($semiperimeter - $this->sideA) * ($semiperimeter - $this->sideB) * ($semiperimeter - $this->sideC));
    }
}
$circle = new Circle(5);
echo "Area of circle: " . $circle->calculateArea() . "<br>";
$rectangle = new Rectangle(10, 5);
echo "Area of rectangle: " . $rectangle->calculateArea() . "<br>";
$triangle = new Triangle(3, 4, 5);
echo "Area of triangle: " . $triangle->calculateArea() . "<br>";
?>