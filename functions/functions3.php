<?php
/*
$names = array("Fred", "Barney", "Wilma", "Betty");



function &findOne($n) {

	global $names;

	return $names[$n];
}

$person =& findOne(1); // Barney

print_r($names);

echo "<br><br>";

$person = "Barnetta"; // changes $names[1]
$names[1] = "Barnetta";

print_r($names);

echo "<br><br>";












switch ($which) {
 case 'first':
 	first();
 	break;

 case 'second':
 	second();
 	break;

 case 'third':
 	third();
 	break;
}


$which();



*/




$array = array("dddddddddddddddddddddddddddddddddd", "ddddd", "d", "dd");

function comparar($a, $b) {
	
	return strlen($a) - strlen($b);
}

usort($array, 'comparar');

print_r($array);





















