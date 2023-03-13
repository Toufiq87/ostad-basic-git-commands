<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<h2>User Registration Form</h2>
	<form action="process_form.php" method="POST" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="profile_picture">Profile Picture:</label>
		<input type="file" id="profile_picture" name="profile_picture" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>


<?php
session_start();
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$profile_picture = $_FILES['profile_picture'];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($profile_picture['name']);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$unique_file_name = uniqid() . '_' . date('Y-m-d-H-i-s') . '.' . $imageFileType;
	$target_path = $target_dir . $unique_file_name;


	if(empty($name) || empty($email) || empty($password) || empty($profile_picture['name'])){
		echo "Please fill out all fields.";
	} else {
	
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "Please enter a valid email address.";
		} else {
			
			if(file_exists($target_file)){
				echo "Sorry, file already exists.";
			} else {
		
				if($profile_picture['size'] > 5000000){
					echo "Sorry, your file is too large.";
				} else {
				
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					} else {
			
						if(move_uploaded_file($profile_picture['tmp_name'], $target_path)){
							$data = array($name, $email, $unique_file_name);
							$file = fopen("users.csv", "a");
							fputcsv($file, $data);
							fclose($file);
							setcookie("username", $name, time() + (86400 * 30), "/");
							header("Location: users.php");
						} else {
							echo "Sorry, there was an error uploading your file.";
						}
					}
				}
			}
		}
	}
}


$file = fopen("users.csv", "r");
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Email</th><th

















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
