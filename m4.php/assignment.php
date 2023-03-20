SELECT * FROM employees;

SELECT name, salary FROM employees WHERE salary > 50000;

SELECT AVG(salary) FROM employees;

SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');

UPDATE employees SET salary = 60000 WHERE id = 1001;

DELETE FROM employees WHERE salary < 30000;

SELECT name, manager FROM departments WHERE name = 'Finance';

SELECT departments.name, COUNT(*) FROM employees JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;

INSERT INTO departments (name, manager) VALUES ('Research', 'Toufiq Elahi');































































































































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













 -->



























































































































// // Task = 01

// <!DOCTYPE html>
// <html lang="en">
// <head>
//   <title> sumon</title>
//   <meta charset="UTF-8">
//   <form>
//     <label for="name">Name:</label>
//     <input type="text" id="name" name="name"><br>
  
//     <label for="email">Email:</label>
//     <input type="email" id="email" name="email"><br>
  
//     <input type="submit" value="Submit">
//   </form>
//   </html>
  




// // Task = 02

// class Person {
//     private $name;
//     private $email;
    
//     public function setName($name) {
//         $this->name = $name;
//     }
    
//     public function setEmail($email) {
//         $this->email = $email;
//     }
    
//     public function getName() {
//         return $this->name;
//     }
    
//     public function getEmail() {
//         return $this->email;
//     }
// }
// $person = new Person();
// $person->setName("Toufiq Elahi");
// $person->setEmail("toufiqelahi@gmail.com.com");

// echo "Name: " . $person->getName() . "<br>\n";
// echo "Email: " . $person->getEmail() . "<br>";

// // task = 03

// <!DOCTYPE html>
// <html lang="en">
// <head>
//   <title> sumon</title>
//   <meta charset="UTF-8">
//   <form>
//     <label for="name">Name:</label>
//     <input type="text" id="name" name="name"><br>
  
//     <label for="email">Email:</label>
//     <input type="email" id="email" name="email"><br>
  
//     <input type="submit" value="Submit">
//   </form>
//   </html>

  
//   include('Person.php');

//   $name = $_POST['Toufiq Elahi'];
//   $email = $_POST['toufiqelahi@gmail.com'];
  

//   $person = new Person();
  
  
//   $person->setName($name);
//   $person->setEmail($email);
  
  
//   echo "Name: " . $person->getName() . "<br>";
//   echo "Email: " . $person->getEmail() . "<br>";
  
  











































// // //1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

// // // $myArray = array("cow", "big cow", "small cow", "midium cow");

// // // $newArray = ($myArray);
// // // print_r($myArray);
// // // print_r($newArray);






// //2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.


// function concatenate_strings($str1, $str2) {
//   // $str1_length = strlen($str1);
//   // $str2_length = strlen($str2);
//   // $overlap_length = min($str1_length, $str2_length);
//   // $overlap = substr($str1, -$overlap_length);
//   // if ($overlap == substr($str2, 0, $overlap_length)) {
//   //     $result = substr($str1, 0, $str1_length - $overlap_length) . $str2;
//   // } else {
//   //     $result = $str1 . $str2;
//   // }
//   // return $result;
// }

// $str1 = "Hello,Toufiq Elahi!\n";
// $str2 = "Toufiq Elahi is a student of ostad";
// $result = concatenate_strings($str1, $str2);
// echo $result; 
















// //3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

// // function removeFirstAndLastElement($arr) {
// //   if (count($arr) < 3) {
// //       return array();
// //   }
// //   array_shift($arr);
// //   array_pop($arr);
// //   return $arr;
// // }

  



// //4.Write a PHP function to check if a string contains only letters and whitespace.



// $string1 = "my name is sumon";
// $string2 = "my name is not sumon";

// if ($string1) {
//     echo "$string1 contains only letters and whitespace.";
// } else {
//     echo "$string1 contains non-letter or non-whitespace characters.";
// }

// if ($string2) {
//     echo "$string2 contains only letters and whitespace.";
// } else {
//     echo "$string2 contains non-letter or non-whitespace characters.";
// }















// //5.Write a PHP function to find the second largest number in an array of numbers.

// // function findSecondLargest($arr) {
// //   // If the array has less than two elements, there is no second largest number
// //   if (count($arr) < 2) {
// //       return null;
// //   }
  
// //   $largest = $arr[0];
// //   $secondLargest = null;
  

// //   foreach ($arr as $num) {
// //       if ($num > $largest) {
// //           $secondLargest = $largest;
// //           $largest = $num;
// //       } elseif ($num > $secondLargest && $num < $largest) {
// //           $secondLargest = $num;
// //       }
// //   }
  
// //   return $secondLargest;
// // }

// // $numbers = [44, 72, 32, 69, 25];
// // $secondLargest = findSecondLargest($numbers);
// // echo "The second largest number is: " . $secondLargest;




























