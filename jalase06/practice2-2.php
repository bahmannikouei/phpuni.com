<style>
    div{
        width: 300px;
        background-color: antiquewhite;
        color: green;
        font-size: 30px;
        border: solid 2px gray;
        padding: 3%;
    }
</style>

<html>
    
    <h1>محاسبه محیط مثلث</h1>
    <form action="" method="post">
        <label for="side1"> ضلع اول</label> 
        <input type="text" name="side1"> <br>
        <label for="side2"> ضلع دوم</label>
        <input type="text" name="side2"><br>
        <label for="side3"> ضلع سوم</label>
        <input type="text" name="side3"><br>
        <input type="submit" value="محاسبه">
    </form>
</html>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $side1 = intval($_POST['side1']);
        $side2 = intval($_POST['side2']);
        $side3 = intval($_POST['side3']);

        // var_dump($side1,$side2,$side3);
        $res = $side1 + $side2 + $side3;
        echo "<div>محیط مثلث برابر است با: $res</div>";
    }
?>