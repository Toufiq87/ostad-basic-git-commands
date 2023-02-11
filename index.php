<?php



















/*
$x="70";
$output=($x>=100)?(($x>=500)?("bd"):("outside bd")):(($x<50)?("nativ elien"):("cross platform elien"));
echo $output;













/*
// $number = 10;
// if ($number %2 === 0) {
//     $result = 'Even';
// } else {
//     $result = 'odd';
// }
// echo $result;

$number = 10;
$result = ($number>50)?(($number>100)?("Greater than 100"):("Greater then 50 but less than 100")):(($number<10)?("Bellow 10"):("Invalid data"));
echo $result;

// $Name = "Abba";
// $result = ($Name="kak")?("True"):("False");
// echo $result;















/*

$color = "default";

switch ($color){
    case "Blue":
    echo "This color is Blue";
    break;
    case "Yellow":
    echo "This color is Yellow";
    break;
    case "Green":
    echo "This color is Green";
    break;
    default:
    print "Not specific colour found";
}










/*
$color = "White";
if($color == "Blue")
print "Color is : Blue";
elseif ("Color == 'Red")
print "Color is: Red";
elseif($color == "Yellow")
print "Color is:Yellow";
else
print "Color is undefined";









/*
$color = "Blue";
if ($color=='Blue')
print "Color is Blue";
else
print "Color is not Blue";










/*
if($age >=18);
echo "Happy Birthday!!";
else
echo "You are below 18";











/*
$t = 30;
echo "The hour (of the server) is " . $t; 
echo PHP_EOL;
echo ", and will give the following message:";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}



















/*
$t = date("H");
echo$t;






/*
if (condition) {
    code to be executed if condition is true;

}



















$tuition = <5000>;

$commission = ($tuition > 20000) ? ($tuition * 0.25) :
              (($tuition > 10000 && $tuition < 20000) ? 0.2 * $tuition :
              (($tuition > 7000 && $tuition < 10000) ? 0.15 * $tuition :
              ("Invalid data")));
              
echo "Commission: $commission";










/*

$commission_amount = ($tuition_fee >= $20000) ? ($tuition_fee * 0.25) : 
                     (($tuition_fee >= $10000 && $tuition_fee < $20000) ? ($tuition_fee * 0.20) : 
                     (($tuition_fee >= $7000 && $tuition_fee < $10000) ? ($tuition_fee * 0.15) : 
                     (($tuition_fee < $7000) ? "Invalid Data" : 0)));














/*


$marks = 65;  
if ($marks >= 60) {
    $grade = "First Division";
} elseif ($marks >= 45) {
    $grade = "Second Division";
} elseif ($marks >= 33) {
    $grade = "Third Division";
} else {
    $grade = "Fail";
}

echo "Student's grade: " . $grade;












/*

$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;


$person = [

]











/*




$looser = “a”;
$b = "$looser";
echo $b;




/*

var_dump(123);
var_dump(0123);















/*

define("GREETING", "Welcome to PHP", true);
echo greeting;
}
?>



/*
$n = 13;
if($n % 2 == 0){
    echo "$n is an even number";
}else{
    echo "$n is a odd number";
}

















/*
$fname = "Toufiq";
 $lname = "Elahi";
 $middlename = "Nothing";

 //printf('His name is %3$s %1$s %2$s',$fnane,$middlename,$lname);

 printf('The Binary eqivalent of %1$d is %1$b',12);
 echo "\n";
 $n = 45.126;
 printf("%.2f",$n);
 echo "\n";
 
 $m = 123.3253;
 $n = 27.155;

 printf("%07.2f \n",$m); 
 printf("%07.2f \n",$n);





$fname = "Isac";
 $lname = "Newton";
 $output = sprintf("His name is %s %s",$fname, $lname);
echo strtoupper($output)


















;



 
 /*
 
 $fname = "Toufiq";
 $lname = "Elahi";
 $middlename = "Sumon";
 printf('His name is %2$s %1$s %3$s, $fname,$middlename,$lname);
 
 
 //$print("Tha Binary eqivalant %d is %b",12,12);
 
 
  
 /*
 $fname = "Toufiq";
 $lname = "Elahi";
 $middlename = "Sumon";
 //printf('His name is %2$s, %1$s ,%3$s, $fname,$middlename,$lname);
 echo"\n";
 
 //$print("Tha Binary eqivalant %d is %b",12,12);
 
 

 
 
 $n = 12;
 $o = 016;
 $h = 0x2B;
//printf("The Number is %d %d %d",$n, $o,$h);

printf("The Binary eqivalant of %d is %b\n",15,15);
printf("The Hexadecimal eqivalant of %d is %x \n",1212,1212);
printf("The Octal eqivalant of %d is %o \n",27,27);

printf("The Octal eqivalant of %d is %o \n",65536,65536);
printf("Octal %o = %d",0200000,0200000);
 
 $fname = "Isacc";
 $lname = "Newton"
 $n = 7;
 $m = $n++;
 echo $m, "\n", $n;
 
 
 
 $number = 7;
 $number++;
 echo $number;
 
 
 
 
 
 $a = 7;
 $x = $y = $a;
 echo $x,"\n",$y;
 
 
 
 
 
 //$number = 12 + 3;//operand operator

 
 
 
 
 
 
 
 
 
 
 
 $number1 = 12;
$number2 = 6;
 $number3= $number1 / $number2;
// $number --;
echo $number3;

// + * / % Arithmic operator
//+= -= Assignment Operator










 //$number += 13;
//echo $number;
//$number2 = $number - 20;

//$number = 12*2;

//echo $number,"\n",$number2;
//$number = (13-5)*6;
//echo $number;
//$number = (24-4) / (7-2);
//echo $number;








$planet1 = "Mercary";
$planet2 = "Jupitar";
echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n"; //"<br/>";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n"; 
printf("The smallest planet is %s and the biggest planet is %s\n",$planet1,$planet2);














$mname = "Sir";

$lname = "Isac";


$fname = "Newton";

//printf("His %s Name is %s %s %s","Full",$fname,$mname,$lname);
printf("His %s Name is %s %s %s","Full",$mname,$fname,$lname);

echo "My
Name
is
{$fname} {$lname}\n
 , How Are you";






$result = true;
var_dump($result);

$name ="Earth";
$uname = strtoupper($name);
//echo "We're living on {$uname}\n";

printf("We are Living on %s",$name);

$result = true;
var_dump($result);




$name = "Earth";
$uname = strtoupper
echo "We're living on {$name}

$name =strtoupper("Earth");
//$uname = strtoupper
echo "We're living on {$name}";





















$name = "Earth";
echo 'We\'re living in {$name}';
var_dump(echo);

$name = "We\'re living in ";

var_dump($name); 





















Type of PHP Variable 
1. Iteger Int
2. Double / Float
Boolean










$name1 = "Toufiq";
$name2 = "Elahi";
var_dump($name1,$name2);




$age = ''; // string(0) "" Type variable
var_dump($age);
$age = null;//null type variable
var_dump($age);
$age = 12.123;//flot type variable
var_dump($age);
echo 'Hello';
echo"\n";

$name = "Earth"; // string type variable
var_dump($name);

$age = 12;// intiger type variable
var_dump($age);






$Name = "Toufiq";
$bame = "Elahi";
echo $Name,$bame;
<?php
$name = "Bangladesh";
$age = 16;
$question = "How are you";
$word = "age";

//echo $$word;

echo 'Hello'.$name;
echo"\n";

echo "Hello {$name},{$question}";











$name1 = "toufiq";
$name2 = "elahi";
echo $name1, $name2;
$name = "bangladesh";
$age = 123;
$myname = "Hasin hyder";
$my_name = "";
$myName="";
$myBeautifullvariable = "";

*/

