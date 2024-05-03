<?php  

class Person {
    public $firstName = 'John';
    public $lastName = 'Niko';

}

$person = new Person();

echo $person->firstName,'<br>';
echo $person->lastName;
?>