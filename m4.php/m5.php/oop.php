<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function get_model() {
        return $this->model;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car make: " . $this->make . "\n";
        echo "Car model: " . $this->model . "\n";
        echo "Car year: " . $this->year . "\n";
    }
}


$car = new Car("Toyota", "Corolla", 2015);


$car->display_info();


$car->set_make("Honda");
$car->set_model("Civic");

$car->display_info();


// // class Human{
// //     function sayHi(){
// //     echo "Salam";
// //     }
// // }
// // class Cat{
// //     function SayHi(){
// //     echo "Meow";
// // }
// // }
// // class Dog{
// //     function sayHi(){
// //         echo "Woof";
// //     }
// // }

// // $h1 = new Human();
// // $c1 = new Cat();
// // $d1 = new Dog();



// // $h1->sayHI;
// // $c1->sayHi();

// class Human {
//     function sayHi() {
//         echo "Salam\n";
//     }
// }

// class Cat {
//     function sayHi() {
//         echo "Meow\n";
//     }
// }

// class Dog {
//     function sayHi() {
//         echo "Woof\n";
//     }
// }

// $h1 = new Human();
// $c1 = new Cat();
// $d1 = new Dog();

// $h1->sayHi();  // output: Salam
// $c1->sayHi();  // output: Meow
// $d1->sayHi();  // output: Woof
