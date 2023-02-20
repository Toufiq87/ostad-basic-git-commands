<?php
function removeFirstAndLast($arr) {
    array_shift($arr);
    array_pop($arr);
    return $arr;
  }

// $arr = [5, 10, 7, 2, 15];
// $secondLargest = secondLargestNumber($arr);
// echo "The second largest number is: $secondLargest"; // Output: The second largest number is: 10
// function secondLargest($arr) {
//     // Find the length of the array
//     $len = count($arr);
  
//     // If the length of the array is less than 2, return null
//     if ($len < 2) {
//       return null;
//     }
  
//     // Initialize variables to keep track of the largest and second largest numbers
//     $largest = $arr[0];
//     $secondLargest = null;
  
//     // Loop through the array and compare each element to the largest and second largest variables
//     for ($i = 1; $i < $len; $i++) {
//       if ($arr[$i] > $largest) {
//         $secondLargest = $largest;
//         $largest = $arr[$i];
//       } else if ($arr[$i] != $largest && ($secondLargest == null || $arr[$i] > $secondLargest)) {
//         $secondLargest = $arr[$i];
//       }
//     }
  
//     // Return the second largest number
//     return $secondLargest;
//   }
  
// $str1 = "Hello World";
// $str2 = "Hello 123";
// if (contains_only_letters_and_whitespace($str1)) {
//   echo "$str1 contains only letters and whitespace.";
// } else {
//   echo "$str1 contains non-letter or non-whitespace characters.";
// }
// if (contains_only_letters_and_whitespace($str2)) {
//   echo "$str2 contains only letters and whitespace.";
// } else {
//   echo "$str2 contains non-letter or non-whitespace characters.";
// }
// $arr = array("apple","banana","chery");
// echo implode(",",$arr);
// function longestWord($str) {
//     $words = explode(' ', $str);
//     $longest_word = '';
//     foreach ($words as $word) {
//       if (strlen($word) > strlen($longest_word)) {
//         $longest_word = $word;
//       }
//     }
//     $str = "The quick brown fox jumped over the lazy dog";
//     echo longestWord($str);
//   }

// function longestWord($str) {
//     // Split the string into an array of words
//     $words = explode(" ", $str);
    
//     // Initialize the longest word variable with an empty string
//     $longestWord = "";
    
//     // Loop through each word in the array
//     foreach ($words as $word) {
//       // Remove any non-letter characters from the word
//       $cleanWord = preg_replace("/[^A-Za-z]/", '', $word);
      
//       // If the cleaned word is longer than the current longest word, update the longest word
//       if (strlen($cleanWord) > strlen($longestWord)) {
//         $longestWord = $cleanWord;
//       }
//     }
    
//     // Return the longest word
//     return $longestWord;
//   }
  
//   // Example usage:
//   $str = "The quick brown fox jumped over the lazy dog";
//   echo longestWord($str); // Output: jumped





















// <?php
// function count_elements($input_array) {
//     $result = array();
//     foreach ($input_array as $element) {
//         if (array_key_exists($element, $result)) {
//             $result[$element]++;
//         } else {
//             $result[$element] = 1;
//         }
//     }
//     return $result;
// }

// $input = [1, 4, 4, 5, 5, 5];
// $output = count_elements($input);

// echo "Input: count_elements([1,4,4,5,5,5])\n";
// echo "Output: ";
// foreach ($output as $key => $value) {
//     echo "$key => $value, ";
// }
// 
// <form action="display_csv.php" method="post" enctype="multipart/form-data">
//     <label for="file">Select CSV file:</label>
//     <input type="file" name="file" id="file">
//     <input type="submit" value="Upload">
// </form>
// <?php
// if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
//     $file = $_FILES['file']['tmp_name'];
//     $destination = 'uploads/' . $_FILES['file']['name'];
//     move_uploaded_file($file, $destination);

//     $file = fopen($destination, 'r');

//     echo '<table>';
//     while (($data = fgetcsv($file)) !== false) {
//         echo '<tr>';
//         foreach ($data as $element) {
//             echo "<td>$element</td>";
//         }
//         echo '</tr>';
//     }
//     echo '</table>';
// } else {
//     echo 'No file uploaded';
// }

// $input = [1,4,4,5,5,5];
// $output = count_elements($input);

// echo "Input: count_elements([1,4,4,5,5,5])\n";
// echo "Output: ";
// foreach ($output as $key => $value) {
//     echo "$key=>$value, ";
// }















// function hasPairWithSum($array, $sum) {
//     $count = count($array);
//     for ($i = 0; $i < $count; $i++) {
//         for ($j = $i + 1; $j < $count; $j++) {
//             if ($array[$i] + $array[$j] == $sum) {
//                 return true;
//             }
//         }
//     }
//     return false;
// }
// $array = [5, 7, 1, 2, 8, 4, 3];
// $sum = 8;

// if (hasPairWithSum($array, $sum)) {
//     echo "There exists a pair of integers in the array that add up to the target sum.";
// } else {
//     echo "There does not exist a pair of integers in the array that add up to the target sum.";
// }$array = [5, 7, 1, 2, 8, 4, 3];
// $sum = 8;

// if (hasPairWithSum($array, $sum)) {
//     echo "There exists a pair of integers in the array that add up to the target sum.";
// } else {
//     echo "There does not exist a pair of integers in the array that add up to the target sum.";
// }
