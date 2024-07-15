<?php
// echo date('Y-m-d h:i:s');
// echo "<hr>";
// echo time();

// $myTime = mktime(14,20,12,07,21,2025);
// $myTime = strtotime('14:30:20 2025-07-21');
// $myTime = date_create('2025-07-21');
// // echo $myTime;
// date_modify($myTime,'+1 month');
// // echo date('Y-m-d H:i:s',$myTime);
// // echo date('Y-m-d');
// echo date_format($myTime,'Y-m-d');
// var_dump($myTime);


$date1 = date_create('2024-06-20');
$date2 = date_create('2025-07-20');
echo "Date 1: ", date_format($date1, 'Y-m-d'); echo "<br>";
echo "Date 2: ", date_format($date2, 'Y-m-d');
$diff = date_diff($date1, $date2);
// echo $diff->
echo "<pre>";
var_dump($diff->days);
$accTime = $diff->days;
echo "</pre>";
echo "تاریخ اعتبار اکانت شما".$accTime.' روز می باشد';





?>