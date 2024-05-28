

<?php 

$person = array('Bahman','Nikouei',43,1,10,'A');
$person2 = array('Nikouei',43,'A');
$price = array(1000,2500,3000,1200,4030,500,700);
// Nested Array
$persons = [
    "1234" => ['Bahman','Nikouei',43,1981],
    "1233" => ['Ali','Taghavi',33,2000],
    "2234" => ['Sara','Alavi',35,1998],
    "1112" => ['Sara','Alavi',35,1998],
];



// echo $person[0].' ', $person[1].' '.$person[2];

// echo $persons['2234'][3];
// echo "<hr>";
// print_r($persons['2234'][0]);
// echo "<hr>";
// var_dump($persons['2234']);
// echo "<hr>";
// var_dump($persons['2234'][0]);



// // var_dump($persons);
// print_r($persons);
// اضافه کردن عناصر به انتهای آرایه 
// print_r($person);
// $result = array_push($person,1981,'Tehran');
// print_r($person);
// $result = array_pop($person);
// print_r($person);
// $result = array_unshift($person,'1234');
// print_r($person);
// $result = array_shift($person);
// print_r($person);
// $result = sort($persons);
// $result = sort($persons[0]);
// $result = sort($persons[1]);
// $result = sort($persons[2]);
// print_r($persons);
// $result = rsort($persons);
// print_r($persons);

// $result = asort($persons);
// print_r($persons);
// sort($persons['1234']);
// print_r($persons);
// ksort($persons);
// print_r($persons);

// if($_SERVER['REQUEST_METHOD'] == 'post'){
//     $name = $_POST['name'];
//     echo $name;
//     // $result = in_array($name, $person);
//     // // print_r($result);
//     // if($result == 1){
//     //     echo 'نام کاربری قابل قبول نمی باشد و از قبل موجود است';
//     //     echo "<br>";
//     //     print_r($person);
//     // }else {
//     //     array_unshift($name, $person);
//     //     echo "نام کاربری ساخته";
//     // }

    
// }


echo "<pre>";



// $result = array_search('Nikouei', $person);
// $result = count($person);
// print_r($result);
// echo "<br>";
// print_r($person);


// $result = array_slice($person,1,2);
// $result = array_slice($person,1,count($person)-2);
// print_r($result);
// echo "<br>";
// print_r($person);

// $result = array_merge($person,$result);
// print_r($result);
// $result = array_keys($person);
// print_r($result);
// $result = array_keys($persons);
// print_r($result);


// $result = array_values($person);
// print_r($result);
// $result = array_values($persons);
// print_r($result);

// $result = array_diff($person,$person2);
// print_r($result);
// print_r($person);
// print_r($person2);

// print_r($price);

// $result = array_filter($price,function($value){
//     if($value > 1000){
//         echo '<br>',$value;
//     }
// });

print_r($person);
print_r(array_map('strtolower',$person));
print_r(array_map('strtoupper',$person));


echo "</pre>";



?>


<!-- <html>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>
</html> -->