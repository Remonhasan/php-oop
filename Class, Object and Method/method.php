<?php

/*
Methods are very useful to attach a behavior to an object. 
In this case we can make a dog bark.
*/

class Dog {
    // class properties
    public $name;
    
    // method 
    public function Bark(){
        echo $this->name . " is barking!";
    }
}

// Initialize Object
$my_dog = new Dog();

// assign values to those properties (name,age,color)
$my_dog->name = "Tommy";

// call method
$my_dog->Bark();

?>