<?php 
require_once "./connention.php";
$sqlQuery = "SELECT * FROM teachers";
$result = $mysqli->query($sqlQuery);
$teachers = array();
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $teachers[] = $row;
  }
}else {
    echo "No teachers found";
}

// echo "<pre>";
// var_dump($teachers);
// echo "</pre>";

?>