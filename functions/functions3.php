<?php

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