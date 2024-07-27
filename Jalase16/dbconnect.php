<?php 
require "./vendor/autoload.php";

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hostname = $_ENV['HOSTNAME'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWD'];
$dbname = $_ENV['DBNAME'];

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}

echo "Connected to database "."<br/>";

?>