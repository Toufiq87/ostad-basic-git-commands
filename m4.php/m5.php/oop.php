<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form action="register.php" method="post">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" required><br><br>
		
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" required><br><br>
		
		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>
		
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		
		<input type="submit" value="Register">
	</form>
	
	
    <?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			
			// Check if all fields are filled
			if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p>Please fill all fields.</p>";
			}
			// Check if email is in a valid format
			elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Please enter a valid email address.</p>";
			}
			// Check if passwords match
			elseif ($password != $confirm_password) {
				echo "<p>Passwords do not match.</p>";
			}
			else {
				// If validation is successful, display confirmation message
				echo "<p>Registration successful! Welcome, $fname.</p>";
			}
		}
	?>
	
	<h2>Login Form</h2>
	<form action="login.php" method="post">
		<label for="login_email">Email Address:</label>
		<input type="email" id="login_email" name="login_email" required><br><br>
		
		<label for="login_password">Password:</label>
		<input type="password" id="login_password" name="login_password" required><br><br>
		
		<input type="submit" value="Login">
	</form>
	
	
    <?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$login_email = $_POST['login_email'];
			$login_password = $_POST['login_password'];
			
			// Check if both fields are filled
			if (empty($login_email) || empty($login_password)) {
				echo "<p>Please fill all fields.</p>";
			}
			else {
				// In this example, we are assuming that the email address and password are hardcoded.
				// In a real-world scenario, you would need to query a database to check the email and password.
				$valid_email = "test@example.com";
				$valid_password = "password123";
				
				if ($login_email == $valid_email && $login_password == $valid_password) {
					// If

































































































// <!DOCTYPE html>
// <form>
//   <label for="name">Name:</label>
//   <input type="text" id="name" name="name" required><br><br>

//   <label for="email">Email:</label>
//   <input type="email" id="email" name="email" required><br><br>

//   <label for="password">Password:</label>
//   <input type="password" id="password" name="password" required><br><br>

//   <label for="profile-pic">Profile Picture:</label>
//   <input type="file" id="profile-pic" name="profile-pic"><br><br>

//   <input type="submit" value="Submit">
// </form>





// <?php
// session_start();


// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $profilePic = $_FILES['profile-pic'];

   
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Invalid email format";
//         exit;
//     }

    
//     $uploadsDir = 'uploads/';
//     $profilePicName = uniqid() . '_' . $profilePic['name'];
//     $targetFile = $uploadsDir . $profilePicName;
//     if (move_uploaded_file($profilePic['tmp_name'], $targetFile)) {
//         echo "Profile picture uploaded successfully";
//     } else {
//         echo "Failed to upload profile picture";
//         exit;
//     }

//     $timestamp = date('YmdHis');
//     $profilePicName = $timestamp . '_' . $profilePicName;
//     rename($targetFile, $uploadsDir . $profilePicName);

   
//     $userData = array($name, $email, $profilePicName);
//     $fp = fopen('users.csv', 'a');
//     fputcsv($fp, $userData);
//     fclose($fp);

  
//     setcookie('username', $name, time() + 3600);

  
//     header('Location: users.php');
// } else {
//     echo "All fields are required";
//     exit;
// }

















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
