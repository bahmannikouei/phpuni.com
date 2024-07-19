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
<html>
    <form action="" method="get">
        <input type="number" name="number_format">
        <input type="submit">
    </form>
</html>
<?php 
$limit = 10;
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once "./connention.php";
    $limit = $_GET['number_format'];
    // var_dump($limit);
    $sql = "SELECT * FROM teachers LIMIT $limit";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
    $field_info = $result->fetch_fields();
    echo "<table>";
        echo "<tr>";
            foreach($field_info as $field ){
                echo "<th>{$field->name}</th>";
            }
        echo "</tr>";

        while ($row = $result->fetch_assoc()){
            echo "<tr>";
            foreach($field_info as $field){
                echo "<td>{$row[$field->name]}</td>";
            }
            echo "</tr>";
        }


}
}




?>