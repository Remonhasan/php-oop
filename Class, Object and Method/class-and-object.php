<?php

/*
    Class Defination: A class is a blueprint, or type, of object.
*/

// Initialize Class as name Dog(must be first letter uppercase)
class Dog {
    // class properties
    public $name;
    public $age;
    public $color;
}

// Initialize Object
$my_dog = new Dog();

// assign values to those properties (name,age,color)
$my_dog->name = "Tommy";
$my_dog->age = 5;
$my_dog->color = "brown";

// print
var_dump($my_dog);

?>