<style>
    input{
        color: green;
        background-color: white;
        margin: 10px;
    }
</style>
<html>
   <form action="./form.php" method="post">
    <label for="firstName">Name:</label>
     <input type="text" name='firstName' id='firstName'> <br>
    <label for="lastName">Last Name:</label>
     <input type="text" name='lastName' id='lastName'> <br>
     <input type="password" name='password'>
     <input  type="submit" name='submit' value="ارسال">
   </form>
</html>


<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $fistName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $_POST['password'];
        // echo 'فرم ارسال شد';

        // echo $fistName , $lastName , $password;
        if($fistName == 'admin' && $password =='1234'){
            echo "$fistName عزیز خوش آمدید";
        }


    }

    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_POST['submit'])){
        echo 'لطفا از متد POST استفاده کنید';
    }

?>