<html>
    <form action="" method="post">
        <input type="text" name="age">
        <input type="submit">
    </form>
</html>

<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $age = intval($_POST['age']);

    $day = $age * 362;
    $m = $age * 12;
    $h = $day * 24;
    $min = $h * 60;
    $s = $min * 60;
    echo "
        $day روزها <br>
        $m ماه ها <br>
        $h  ساعت ها  <br>
        $min دقیقه ها  <br>
        $s ثانیه ها <br>
    ";
}

?>