<?php 

$number1 = 15;

if($number1 % 2 == 0){
    echo "$number1 is even";
}else {
    echo "$number1 is odd";
}

// if($number1 % 2 == 0){
// }
// if($number1 % 2 != 0){
// }
echo "<hr>";

$number2 = 3;
$number3 = 3;
$number4 = 3;

$sum = $number2 + $number3 + $number4;
$min = $number2 - $number3 - $number4;
$multi = $number2 * $number3 * $number4;

echo $number2 ,' & ', $number3,' & ' , $number4, '</br>';
echo "Sum: + " , $sum , '<br>';
echo "Min: - " , $min, '<br>';
echo "Multi: * " , $multi, '<br>';

echo "<hr>";
$number5 = 2;
$number6 = 4;
$result = $number5 ** $number6;
echo "Numbers:", $number5, ' ^ ', $number6 , '</br>';
echo 'Result: ', $result;
echo "<hr>";

$number7 = 10;
$number8 = 12;
$number9 = 14;

$avg = ($number7 + $number8 + $number9) / 3;
echo "Average Number: $number7 and $number8 and $number9 : $avg";

echo "<hr>";
$sideSq = 10;
$sqrper = $sideSq * 4;
echo "Square premter is: $sqrper ";
echo "<hr>";
$sidetri1 = 10;
$sidetri2 = 7;
$sidetri3 = 9;

$triangle = $sidetri1 + $sidetri2 + $sidetri3;

echo "Triangle : $triangle ";

?>