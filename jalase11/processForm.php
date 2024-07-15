<?php 
// echo $name = $_POST['name'];
// echo $natcode = $_POST['natcode'];
// echo $name,'<br />';
// var_dump($natcode);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $natcode = $_POST['natcode'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['addr'];
    
    class Person {
        public $name;
        public $natcode;
        public $phone;
        public $email;
        public $address;

        public function __construct($name, $natcode, $phone, $email, $address){
            $this->name = $name;
            $this->natcode = $natcode;
            $this->phone = $phone;
            $this->email = $email;
            $this->address = $address;
        }

    }
    $person = new Person($name,$natcode, $phone, $email, $address);
    echo "<h2>اطلاعات ذخیره شد</h2>";
    echo "<hr>";
    echo "Name and Family:".$person->name."<br>";
    echo "National Code: ".$person->natcode."<br>";
    echo "Phone: ".$person->phone."<br>";
    echo "E-mail: ".$person->email."<br>";
    echo "Address: ".$person->address."<br>";
    echo "<pre>";
    // var_dump($person);
    echo "</pre>";
    

}else{
    // echo "شما اجازه دسترسی مستقیم به این صفحه ندارید";
    header("location: https://www.pishgamantehran.com");
    exit();
}
?>