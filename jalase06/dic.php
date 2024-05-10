<html>
    <form action="" method="post">
        <input type="text" name="word">
        <input type="submit" value="ترجمه کن">
    </form>
</html>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $word = $_POST['word'];

    switch($word){
        case 'apple': echo "سیب";
        break;
        case 'orange': echo "پرتقال";
        break;
        case 'banana': echo "موز";
        break;

        default: echo "کلمه شما در دیکشنری ما نبود";

    }
}

?> 