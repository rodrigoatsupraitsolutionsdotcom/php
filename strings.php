<?php


$name = "Gustavo -";
$name2 = "Macarroni";

echo "Hi, \\\"$name \n $name2\"";
echo '<br/>';

echo 'Hi, \ $name $name2';
echo '<br/>';

echo 'Hi, ' . $name . $name2;
echo '<br/>';


$dosPath = 'C:\\WINDOWS\\SYSTEM\\';
$publisher = 'Tim O\'Reilly';
echo "$dosPath$publisher";

echo '<br/>';

$hum = 'HUM';

$a = 'HUM';
$b = "$hum";

if ($a == $b) {
 echo "a and b are equal";
}else{
 echo "a and b are unequal";
}


if (is_string($b)) {
 // $x is a string
}
