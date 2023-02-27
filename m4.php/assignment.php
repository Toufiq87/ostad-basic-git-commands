<?php

// Task = 01

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
  




// Task = 02

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

// task = 03

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
  
  











































// //1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

// // $myArray = array("cow", "big cow", "small cow", "midium cow");

// // $newArray = ($myArray);
// // print_r($myArray);
// // print_r($newArray);






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




























