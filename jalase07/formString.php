<style>
    span{
        background-color: rgb(110,125,255);
        color: wheat;
        font-size: 30px;
        padding: 10px;
        margin: 10px;
    }
</style>

<?php 
$text ='';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $text = $_POST['text'];
    }
?>

<html>
    
    <h1>محاسبه گر متن پردازشگر متن</h1>
    <form action="" method="post">
    <textarea name="text" id="" rows="5" cols="80"><?php echo $text;?></textarea> <br>
    <!-- <input type="text" name="rep"> -->
    <input type="submit">
    </form>
</html>


<?php 
// $length = strlen($text);
// echo "<span> تعداد کارکتر: $length</span>"; echo "<hr>";
// echo 'تعداد کارکتر:', strlen($text); echo "<hr>";
// echo substr_replace($text,'ali',11,6);echo "<hr>";
echo nl2br($text);echo "<hr>";
echo strrev($text);echo "<hr>";
$textrev = strrev($text);

if($text == $textrev){
    echo 'This word is palindrome';
}else{
    echo 'This word is not palindrome';
}


?>

