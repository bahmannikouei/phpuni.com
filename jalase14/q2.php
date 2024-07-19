<style>
    table,td{
        border: 1px solid gray;
        width: 25%;
        border-collapse: collapse;
        padding: 2%;
        /* background-color: red; */
    }
    th{
        background-color: black;
        color: wheat;
    }
</style>
<?php 
require "./connention.php";
$sqlquery = "SELECT * FROM teachers LIMIT 5";
$result = $mysqli->query($sqlquery);

if($result->num_rows > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Name</th>";
    echo "<th>Telephone</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()){
        // echo "ID: ".$row['id']."NAME:".$row['name']."PHONE:".$row['tel']."<br>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['tel']."</td>";
        echo "</tr>";
        
    }
    echo "</table>";
}else{
    echo "رکوردی پیدا معلمی آیتمی  نشد";
}
?>
