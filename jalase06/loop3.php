<html>
    <form action="" method="post">
        <input type="text" name="num">
        <input type="submit" value="پیدا کن">
    </form>
</html>

<?php 

$persons = array('ali','taghi','gholi','zahra','bahman');

// echo count($persons);

// for($i=0; $i<=3; $i++){
//     // echo $i;
//     echo "Hello $persons[$i] <hr>";
// }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   echo "<h1> نتیجه جستجو </h1> <hr>";
    for($i=0; $i <= intval($_POST['num']-1); $i++){
        // echo $i;
        echo "Hello $persons[$i] <hr>";
    }
}


// echo "<h1> Foreach Here: </h1> <hr>";
// foreach($persons as $value){
//     echo "Hello $value <hr>";
// }



?>