<?php 

// $name;
// $age;
// $height;

//                0       1  2
$person = array('Bahman',22,187);
echo $person[0].'<br>';
echo $person[2].'cm';

$bahman = array(
    "name"  => "Bahman",
    "age" => 43,
    "height" => 187
);
echo "<br>";
echo $bahman["name"].' '.$bahman["height"].' '.$bahman["age"];
?>