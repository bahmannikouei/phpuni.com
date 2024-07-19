<?php
require './vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv =  Dotenv::createImmutable(__DIR__);

$dotenv->load();

$host= $_ENV['DB_HOST'];
$databasename= $_ENV['DB_NAME'];
$user= $_ENV['DB_USER'];
$password= $_ENV['DB_PASS'];

$mysqli = new mysqli($host, $user, $password, $databasename);

if($mysqli->connect_error){
    die("Error connecting to database".$mysqli->connect_error);
}
echo "Connected database is OK."."</br>";


?>