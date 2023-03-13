<!DOCTYPE html>
<form>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br><br>

  <label for="profile-pic">Profile Picture:</label>
  <input type="file" id="profile-pic" name="profile-pic"><br><br>

  <input type="submit" value="Submit">
</form>





<?php
session_start();


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profilePic = $_FILES['profile-pic'];

   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    
    $uploadsDir = 'uploads/';
    $profilePicName = uniqid() . '_' . $profilePic['name'];
    $targetFile = $uploadsDir . $profilePicName;
    if (move_uploaded_file($profilePic['tmp_name'], $targetFile)) {
        echo "Profile picture uploaded successfully";
    } else {
        echo "Failed to upload profile picture";
        exit;
    }

    $timestamp = date('YmdHis');
    $profilePicName = $timestamp . '_' . $profilePicName;
    rename($targetFile, $uploadsDir . $profilePicName);

   
    $userData = array($name, $email, $profilePicName);
    $fp = fopen('users.csv', 'a');
    fputcsv($fp, $userData);
    fclose($fp);

  
    setcookie('username', $name, time() + 3600);

  
    header('Location: users.php');
} else {
    echo "All fields are required";
    exit;
}

















// <?php

// class Car {
//     private $make;
//     private $model;
//     private $year;

//     public function __construct($make, $model, $year) {
//         $this->make = $make;
//         $this->model = $model;
//         $this->year = $year;
//     }

//     public function get_make() {
//         return $this->make;
//     }

//     public function set_make($make) {
//         $this->make = $make;
//     }

//     public function get_model() {
//         return $this->model;
//     }

//     public function set_model($model) {
//         $this->model = $model;
//     }

//     public function get_year() {
//         return $this->year;
//     }

//     public function set_year($year) {
//         $this->year = $year;
//     }

//     public function display_info() {
//         echo "Car make: " . $this->make . "\n";
//         echo "Car model: " . $this->model . "\n";
//         echo "Car year: " . $this->year . "\n";
//     }
// }


// $car = new Car("Toyota", "Corolla", 2015);


// $car->display_info();


// $car->set_make("Honda");
// $car->set_model("Civic");

// $car->display_info();


// // // class Human{
// // //     function sayHi(){
// // //     echo "Salam";
// // //     }
// // // }
// // // class Cat{
// // //     function SayHi(){
// // //     echo "Meow";
// // // }
// // // }
// // // class Dog{
// // //     function sayHi(){
// // //         echo "Woof";
// // //     }
// // // }

// // // $h1 = new Human();
// // // $c1 = new Cat();
// // // $d1 = new Dog();



// // // $h1->sayHI;
// // // $c1->sayHi();

// // class Human {
// //     function sayHi() {
// //         echo "Salam\n";
// //     }
// // }

// // class Cat {
// //     function sayHi() {
// //         echo "Meow\n";
// //     }
// // }

// // class Dog {
// //     function sayHi() {
// //         echo "Woof\n";
// //     }
// // }

// // $h1 = new Human();
// // $c1 = new Cat();
// // $d1 = new Dog();

// // $h1->sayHi();  // output: Salam
// // $c1->sayHi();  // output: Meow
// // $d1->sayHi();  // output: Woof
