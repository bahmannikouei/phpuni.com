<html>
    <form action="" method="post">
    <label for="num">ضلع مربع را وارد کنید</label>    
    <input id="num" type="text" name="num">
    <input type="submit" name="submit" value="محاسبه ">
    </form>
</html>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $num = $_POST['num'];
    // $num = intval($num);
    $num =intval($_POST['num']);

    // var_dump($num);
    if($num == 0){
        echo "مقدار ورودی را صحیح و بصورت عددی وارد کنید";
    }

    $res1 = $num * $num;
    echo "مساحت مربع برابر است با: $res1 <hr>";
    $res2 = $num * 4;
    echo "محیط مربع برابر است با : $res2 <hr>";

}

?>