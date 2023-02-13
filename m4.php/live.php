<?php
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
// ?>
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

$input = [1,4,4,5,5,5];
$output = count_elements($input);

echo "Input: count_elements([1,4,4,5,5,5])\n";
echo "Output: ";
foreach ($output as $key => $value) {
    echo "$key=>$value, ";
}















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
