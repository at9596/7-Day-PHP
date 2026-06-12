<?php
// Dependency injection is a design pattern that allows to a user to use another class dependency  without creating by self.

// it is a design pattern used to achieve Inversion of Control (IoC) between classes and their dependencies.

class Engine {
    public function start() {
        return "DI are Working!";
        
    }
}

class Car {
    private $engine;

    // We type-hint and pass the dependency right here
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    public function drive() {
        return $this->engine->start();
    }
}

// How you use it:
$engine = new Engine();
$car = new Car($engine);
echo $car->drive();
echo "\n";