<?php
// A constructor is a special method of a class that is automatically called when an object of the class is instantiated, and it is used to initialize the object’s variables and set up its initial state.

class Fruit{
    public string $name;

    function __construct( string $name)
    {
        $this ->name = $name;
    }
    public function getName(){
        echo $this->name;
    }
}
 $obj =  new Fruit("Amit");
 $obj -> getName();
 echo "\n";


