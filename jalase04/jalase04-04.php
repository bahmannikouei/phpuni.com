<?php
$x = 5; // integer
$y = 5; // integer
$z = "5"; // string
echo "x =" . $x . "<br>" . "y =" . $y . "<br>" ; 
if ($x === $z) {
    echo "مقادیر و نوع دو متغیر  با هم برابر هستند";
}else {
    echo " مقادیر و نوع دو متغیر   با هم برابر نیستند";
}
if ($x > $y){
    echo "true";
}else {
    echo "false";
}

?>