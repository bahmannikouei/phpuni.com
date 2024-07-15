<?php 

$mysqli = new mysqli('localhost','root','','uni_kharazmi');

if ($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully";

?>