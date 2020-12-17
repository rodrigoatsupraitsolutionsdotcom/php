<?php
/*
$cebola[0] = "Edison";
$cebola[1] = "Wankel";
$cebola[2] = "Crapper";
$cebola[3] = null;

$tomate['Light bulb'] = "Edison";
$tomate['Rotary Engine'] = "Wankel";
$tomate['Toilet'] = "Crapper";


echo $cebola[2];
echo '<br>';
echo $tomate['Light bulb'];
*/

$person = array(
	"Edison", 
	"Wankel", 
	"Crapper"
);

print_r($person);

echo '<br>';

$creator = array(
	'Light bulb' => "Edison",
	'Rotary Engine' => "Wankel",
	'Toilet' => "Crapper"
);

print_r($creator);
