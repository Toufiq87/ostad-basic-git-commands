<?php


$file_name = "ostad.txt";
$file = fopen($file_name, "a+");

if(file_exists($file_name)) {
  $content = fread($file, filesize($file_name));
  fseek($file, 0);
  fwrite($file, $content . date("2023-11-12 H:i:s"));
} else {
  fwrite($file, date("2023-11-12 H:i:s"));
}

fclose($file);


// /**
//  * Determins if the argument is even or odd
//  */

//  function isEven($n) { 
//     if($n % 2==0) {
//         return true;
//         }
//     return false;
// }

// function factorial($n){
//     $result = 1;
// for($i=$n;$i<1;$i--){
//     $result *= $i;
// }
// return $result;
// }



// function serve($foodType,$numberOfItems){
//     echo "{$numberOfItems}  {$foodType} আল-হামদুলিল্লাহ";
// }


// // function serve($foodType,$numberOfItems){
// //     echo "{$numberOfItems}" of {$foodType} has been served";
// // }