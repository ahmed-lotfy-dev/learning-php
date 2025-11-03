<?php
########### OOP Object Oriented Programming
// ######   Class
// // Definition = Encapsulation
// class Shape
// {
//     private $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function
//         rotate(
//         $degree
//     ) {
//         $angle = 0;
//         $newAngle = $angle + $degree;
//         return $newAngle % 360;
//     }

//     public function playSound()
//     {
//         echo "Play Sound..." . $this->name . "\n";
//     }
// }

// // Inheritence
// class Square extends Shape
// {
//     // Polymorphism (Overloading)
//     public function __construct()
//     {

//     }
// }

// $circle = new Shape("Circle", );
// $square = new Square(); // New Object

// echo $circle->rotate(45);
// $circle->playSound();

// echo $square->rotate(90);
// $square->playSound();

######   Interface

interface Shape
{
    public function rotate($degree);
    public function playSound();
}

// Implementation
class Square implements Shape
{
    public function rotate($degree)
    {
        echo "rotating.." . $degree . PHP_EOL;
    }

    public function playSound()
    {
        echo "playing sound..";
    }
}

class Ameoba implements Shape {
    public function rotate($degree) {
        echo "rotating.." . $degree . PHP_EOL;
    }

    public function playSound() {
        echo "playing sound";
    }
}