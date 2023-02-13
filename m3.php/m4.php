<?php
// function printN($i){
//     if($i >= 10){
//         return;
//     }
//     echo $i."\n";
//     $i++;
//     printN($i);
// }

// //printN(1);

// function printNumber($counter, $send,$stepping=1){
//     if($counter > $send){
//         return;
//     }
//     echo $counter."\n";
//     $counter += $stepping;
//     printNumber($counter, $send,$stepping);
// }

// printNumber(21, 37,6);

function fibonacci($old, $new, $start, $send){
    if($start>$send){
        return;
    }
$start++;
echo $old." ";
$_temp = $old + $new;
$sold = $new;
$new = $_temp;

fibonacci($old, $new, $start, $send);
}
fibonacci(0,1,15);
<?php
// function fibonacci($old, $new, $start, $send){
//     if($start>$send){
//         return;
//     }
// $start++;
// echo $old." ";
// $_temp = $old + $new;
// $sold = $new;
// $new = $_temp;

// fibonacci($old, $new, $start, $send);
// }
// fibonacci(0,1,15);


// $name = "Earth";

// function doSomething(){
//     global $name;
//     //echo $name;
//     echo $GLOBALS['name'];
// }

// doSomething();
// function doSomething(){
//     global $name;
//     $name = "Earth"; 
// }
// doSomething();
// echo $name;

function doSomething(){
    static $i;
    $i=$i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
    doSomething();
    doSomething();
    doSomething();


