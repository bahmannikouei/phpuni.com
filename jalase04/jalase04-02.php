<?php 
$number1 = 50; // integer
$number2 = 50; // integer
$text = "50"; // string
echo "<br>";
var_dump("number1 == number2:" , $number1 == $number2); // true
var_dump("number1 <= number2:" , $number1 <= $number2); // true
var_dump("number1 >= number2:" , $number1 >= $number2); // true
var_dump("number1 < number2:" , $number1 < $number2); // false
var_dump("number1 > number2:" , $number1 > $number2); // false
var_dump("number1 === number2:" , $number1 === $number2); // true
var_dump("text == number2:" , $text == $number2); // true
var_dump("text === number2:" , $text === $number2); // false
var_dump("number1 != number2:" , $number1 != $number2); // false
var_dump("number1 !== number2:" , $number1 !== $number2); // false
var_dump("text !== number2:" , $text !== $number2); // true



?>