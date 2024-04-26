<?php

$x = 51;
$y = 5;
// $z = $x + $y;
echo "x = " . $x;
echo "<br>";
echo "y = " . $y;
echo "<hr>";
echo "x + y = ". $x + $y;
echo "<br>";
echo "x - y = ".$x - $y;
echo "<br>";
echo "x / y = ".$x / $y;
echo "<br>";
echo "x * y = ".$x * $y;
echo "<br>";
echo "x ^ y = ".$x ** $y;
echo "<br>";
echo "x % y = ".$x % $y;
echo "<br>";
echo "اولویت های عملگرهای محاسباتی";
echo "<br>";
echo  3 + 5 * 2; //16 false 13 true 
echo "<br>";
echo (3+5)*2; //13 false 16 true

// $x = $x + 1;
$x += 5; // x = 56
$x *= 5; // x = 275
echo "<br>";
echo 'x = ',$x;
echo "<br>";
echo "x + y = ". $x + $y;
echo "<br>";
echo "x * y = ". $x * $y;
echo "<br>";
var_dump("x == y:" . $x == $y);
echo "<br>";
var_dump("x < y:" . $x < $y);
echo "<br>";
var_dump("x > y:" . $x > $y);
echo "<br>";
$number1 = 5;
$number2 = 5;
var_dump("number1 == number2:" . $number1 == $number2);


?>