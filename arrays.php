<?php

$cebola[0] = "Edison";
$cebola[1] = "Wankel";
$cebola[2] = "Crapper";
$cebola[3] = null;
/*

$tomate['Light bulb'] = "Edison";
$tomate['Rotary Engine'] = "Wankel";
$tomate['Toilet'] = "Crapper";


echo $cebola[2];
echo '<br>';
echo $tomate['Light bulb'];
*/

$person = array(
	"á",
	"Á",
	"Edison", 
	"Wankel", 
	"Crapper",
	"0",
	"_x"
);

//print_r($person);

//echo '<br/>';

$creator = array(
	'Light bulb' => "Edison",
	'Rotary Engine' => "Wankel",
	'Toilet' => "Crapper"
);

//print_r($creator);

/*
foreach ($person as $x) {
 echo "Hello, " . $x . "<br/>";
}
echo "<br>";
echo "<br>";
echo "<br>";
*/

foreach ($creator as $c => $t) {
 echo "$c invented the $t<br/>";
}

echo "<br>";
echo "<br>";
echo "<br>";

asort($creator);

foreach ($creator as $c => $t) {
 echo "$c invented the $t<br/>";
}

/*
sort($person);

foreach ($person as $x) {
 echo "Hello, " . $x . "<br/>";
}
*/
