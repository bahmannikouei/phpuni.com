<style>
    input{
        margin-bottom: 10px;
    }
    .but{
        padding: 15px;
        width: 50px;
        background-color: greenyellow;
        color: black;
        font-size: 15px;
    }
    .myClass{
        width: 500px;
        background-color: antiquewhite;
        padding: 20px;

    }
</style>
<html>
    <div class='myClass'>
    <form action="" method='post'>
        <input type="number" name='number1'> <br>
        <input type="number" name='number2'> <br>
        <input class="but" type="submit" name='submit' value="+">
        <input class="but" type="submit" name='submit' value="-">
        <input class="but" type="submit" name='submit' value="*">
        <input class="but" type="submit" name='submit' value="/">
    </form>
    </div>
  
</html>


<?php 
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

// echo $number1 , $number2;

if($_POST['submit'] == '+'){
    $result = $number1 + $number2;
    echo "<h1>$result</h1>";
}

if($_POST['submit'] == '-'){
    $result = $number1 - $number2;
    echo $result;
}

if($_POST['submit'] == '*'){
    $result = $number1 * $number2;
    echo $result;
}

if($_POST['submit'] == '/'){
    $result = $number1 / $number2;
    echo $result;
}

}


?>