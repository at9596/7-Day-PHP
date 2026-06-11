<?php

class Base{
    public int $height;

    public function __construct (int $height){
     $this-> height = $height;
    }
    public function getVolume(){
        $vol = $this-> height * $this-> height;
        echo $vol;
    }
}

class Child extends Base{
    // Inheritence is a strong pillar of oop . It is used for acquiring all the properties and behaviour of parent class to child class.

}

$obj = new Child(5);
$obj->getVolume();
echo "\n";