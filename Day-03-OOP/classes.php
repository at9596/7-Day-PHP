<?php

class Student{
    public string $name;
    public function printName(string $name){
        $this->name = $name;
        echo ($this->name);
    }

}

$student = new Student();
$student->printName("Abhishek");
echo "\n";