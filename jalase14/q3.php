<?php 

require "./connention.php";
$queryField = "SHOW COLUMNS FROM teachers";
$result = $mysqli->query($queryField);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo $row['Field']." ";
    }
}else {
    echo "نام ستون پیدا نشد عناوین ستون پیدا نشد";
}

mysqli_close($mysqli);
?>