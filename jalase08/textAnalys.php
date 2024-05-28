<?php 
$text = '';
$chars = '';
$words = '';
$sent = '';
$parag = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $text = $_POST['text'];
    $chars = mb_strlen($text);
    $words = str_word_count($text,0,'ابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیآ');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            width: 800px;
            background-color: wheat;
            text-align: center;
            direction: rtl;
            margin: auto;
        }
        div{
            text-align: right;
            font-size: 20px;
            padding-right: 100px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آنالیز متن</title>
</head>
<body>
    <h3>آنالیز متن</h3>
    <form action="" method="post">
    <textarea name="text" id="" rows="15" cols="100"><?php echo $text;?></textarea>
    <input type="submit" name="submit" value="آنالیز متن">
    </form>
    <div>
        تعداد کارکتر        <?php echo $chars ?> <br>
        تعداد کلمه        <?php echo $words ?><br>
        تعداد جمله        <?php echo $sent ?><br>
        تعداد پاراگراف        <?php echo $parag ?><br>
    </div>
</body>
</html>