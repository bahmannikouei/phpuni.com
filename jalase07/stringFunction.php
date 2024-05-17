<?php  

$text = "alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. next long no gave mr eyes. Admiration advantages no he celebrated so pianoforte unreserved. Not its herself forming charmed amiable. Him why feebly expect future now.

Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling. Of on am father by agreed supply rather either. Own handsome delicate its property mistress her end appetite. Mean are sons too sold nor said. Son share three men power boy you. Now merits wonder effect garret own.";

echo $text , "<br />";  echo '<hr>';
echo 'strlen() : ', strlen($text); echo '<hr>';
echo 'strpos() : ', strpos($text,'to'); echo '<hr>';
echo 'strrpos() : ', strrpos($text,'to'); echo '<hr>';
echo 'substr() : ', substr($text,0,30).'...','<a href="#">More... </a>'; echo '<hr>';
echo 'str_replace() : ', str_replace('to','TO',$text); echo '<hr>';
echo 'str_ireplace() : ', str_ireplace('tO','TO',$text); echo '<hr>';
echo 'strtoupper() : ', strtoupper($text); echo '<hr>';
echo 'strtolower() : ', strtolower($text); echo '<hr>';
// echo 'ucfirst() : ', ucfirst(strtolower($text)); echo '<hr>';
echo 'ucfirst() : ', ucfirst($text); echo '<hr>';
echo 'ucwords() : ', ucwords($text); echo '<hr>';

$text2 = " Bahman  nik                                 ";
var_dump($text2);
var_dump(trim($text2));

$name = "bahman";
$fam = "Niko";

echo $name.$fam;
echo "<hr>";
$textToArray = explode(".", $text);
// print_r($textToArray);
var_dump($textToArray);
echo "<hr>";
echo $textToArray[7];
echo "<hr>";
echo implode(" ", $textToArray);
echo "<hr>";

$age = 44;
$n1 = 22;
$n2 = 22.44;
// echo sprintf("My name is $name, my family is $fam my age is $age");
echo "<hr>";
echo sprintf("My name is %s, my family is %s my age is %d",$name , $fam , $age);
echo "<hr>";
echo sprintf("%s\n%s\n%d\n%%\n%d\n%f",$name , $fam , $age,$n1,$n2);
 


?>