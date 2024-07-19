<?php 
// require "./qteachers.php";
// var_dump($teachers);

require_once "./connention.php";
$sqlQuery = "SELECT * FROM teachers LIMIT 10";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Tel</th>
        </tr>
        <?php foreach($teachers as $teacher){ ?>
        <tr>
            <td><?php echo $teacher['id']; ?></td>
            <td><?php echo $teacher['name']; ?></td>
            <td><?php echo $teacher['tel']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>