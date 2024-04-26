<?php 
$user = "admin";
$pass = "12345";

if ($user == "admin" && $pass == "1234"){
    echo "ادمین گرامی خوش آمدید";
    }else {
        // echo "شما ادمین نیستی برای چی اومدی؟";
        echo "<html>
                        <h1 style='color: red;'>شما اجازه دسترسی به محتوای این بخش را ندارید</h1>
                    </html>";
    }

if ($user != 'admin'){
    echo "نام کاربری اشتباه بود";
}
if ($pass != "1234"){
    echo "پسورد اشتباه است";
}
?>



