<?php




$email = array();
for ($i=0; $i <= 7; $i++) { 
    $email[$i]="test";
}
$email[$i]="test2";
//print_r($email);
echo "<br>";
$b=array_unique($email);
$d=array_intersect($b,$email);
$c=count($b);
//print_r(array_diff(array_unique($email),$email));


print_r(array_values($b));














?>