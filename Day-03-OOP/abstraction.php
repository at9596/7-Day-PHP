<?php

// Abstract class: cannot be instantiated directly
abstract class Vehicle {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    // Abstract method: declared but not implemented here
    abstract public function startEngine(): string;

    // Concrete method: common implementation for all vehicles
    public function stopEngine(): string {
        return $this->name . " engine stopped.";
    }
}

// Child class: must implement the abstract method
class Car extends Vehicle {
    public function startEngine(): string {
        return $this->name . " car engine started with key.";
    }
}

class Bike extends Vehicle {
    public function startEngine(): string {
        return $this->name . " bike engine started with kick.";
    }
}

// Usage: working at an abstract level (Vehicle), not caring about details
$car = new Car("Toyota");
$bike = new Bike("Honda");

echo $car->startEngine();   // Different behavior
echo "\n";
echo $bike->startEngine();  // Different behavior
echo "\n";
echo $car->stopEngine();    // Common implementation

// Abstraction is a strong pillar of OOP. 
// It is used for hiding complex implementation details 
// and showing only the essential features of an object, 
// so that code can be used at a higher level without knowing internal workings.