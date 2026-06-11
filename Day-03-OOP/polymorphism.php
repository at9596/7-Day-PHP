<?php

interface Shape {
    public function calculateArea(): float;
}

class Circle implements Shape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * $this->radius * $this->radius;
    }
}

class Square implements Shape {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function calculateArea(): float {
        return $this->side * $this->side;
    }
}

// Polymorphic function: works with ANY Shape
function printArea(Shape $shape): void {
    echo "Area: " . $shape->calculateArea() . PHP_EOL;
}

$circle = new Circle(5);
$square = new Square(4);

printArea($circle);   // different behavior for Circle
printArea($square);   // different behavior for Square


// Polymorphism is a strong pillar of OOP. 
// It enables one interface to be used for multiple forms, 
// so the same method call executes different code based on the object type.