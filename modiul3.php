<?php
include_once "functions.php";
$x = 0;

echo "Factorial of {$x} is ".factorial($x);
















// $x = 12;

// if (isEven($x)){ //argument
//     echo "{$x} is an even number";
// }else{
//     echo "{$x} is an odd number";
// }
 

























// include_once "functions.php";
// $x = 12;

// if (isEven($x)){ //argument
//     echo "{$x} is an even number";
// }else{
//     echo "{$x} is an odd number";
// }
 







// function factorial($n){

//     $result = 1
//     for($i = $n;$i>1;i--){
//         $result *=$i;
//     }
//     retenr $result;
// }










// $veryold = 0;
// $old = 1;
// $new = 1;
// for($i=0;$i<10;$i++){
//     echo $veryold." ";
//     $old = $new;
//     $new = $old + $veryold;
//     $veryold = $old;
// }

// 
// initial
// v = 0
// o = 1
// n = 1



// 1st loop
// v = 1
// o = 1
// n = 1

// 2nd loop
// v = 1
// o = 1
// n = 2


// 3rd loop
// v = 2
// o = 2
// n = 3

// 4th loop
// v = 3
// o = 3
// n = 5
























// for($i = 20; $i < 30;$i++) {

// if($i<27){
//     continue;
// }
// echo $i;
// echo PHP_EOL;
// }




















    //     if($i%13==0){
//     echo$i;
//     echo PHP_EOL;
//         break;
//     }
// }


















// $i=0;
// while ($i<5){
//     echo $i;
//     echo PHP_EOL;
//     $i++;
// }
// echo "========\n";
// $j=0;
// while ($j++ <5){
//     echo $j;
//     echo PHP_EOL;
// }
// echo "========\n";
// $j=0;
// while (++$j <5){
//     echo $j;
//     echo PHP_EOL;
// }
// $x = $y = 5;
// $x = ++$y;
// echo $x.":".$y;





// for ($i=0; $i<100; $i++){
//     //echo $i."\n";
//     // if( $i % 7 == 0) echo $i."\n";
//     // if( $i % 11 == 0) echo $i."\n";


// echo $i % 7 == 0 ? $i."\n":'';
// echo $i % 11 == 0 ? $i."\n":'';

// }

// for($i=0,$j=0;$j<100;$i+=7,$j+=11){
//     echo $i."\n";
//     echo $j > 100 ? $j ."\n":'';
// }









// // for($i = 10,$j = 1; $i > 0;$i-=1,$j++){
// //     echo $i.":".(11-$i);
// //     echo PHP_EOL;
// // }






























// // // for ($i = 1;$i<20;$i+=1)
// // //     echo$i;
// // //     echo PHP_EOL;
// // //     for($j=0; $j<$i; $j++){
// // //         echo "*";
// // //     }
// // // }
// // //($j=0; $j<$i; $j++){
    

// //     for ($i = 6;$i<50;$i+=1){
// //     //echo$i;
// //     echo PHP_EOL;
// //     for ($j = 0;$j<$i;$j++){
// //         echo "*";
// //     }
// //     }
// // *
// //     $i=0;
// //     while($i<10){
// //         $i++;
// //         echo $i.PHP_EOL;
// //     }
    
// //     $i=0;
// //     do{
// //         $i++;
// //         echo $i.PHP_EOL;
// //     }while($i<10);

// //     echo "Go To\n";
// //     $i = 0;
// //     a: $i++;
// //     echo $i.PHP_EOL;
// //     if($i<10) goto a;