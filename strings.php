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