<html>
    <h1>محاسبه مساحت مثلث</h1>
    <form action="" method="post">
    <label for="h"> ارتفاع را وارد کنید</label>    
    <input id="h" type="text" name="h"> <br> <br>
    <label for="b"> پایه را وارد کنید</label> 
    <input type="text" id="b" name="b"> <br>
    <input type="submit" name="submit" value="محاسبه ">
    </form>
</html>

<?php  
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $h = intval($_POST['h']);
    $b = intval($_POST['b']);
    // var_dump($b,$h);
    $res = $h * $b / 2;
    echo "مساحت مثلث برابر است با : $res";
}



?>

