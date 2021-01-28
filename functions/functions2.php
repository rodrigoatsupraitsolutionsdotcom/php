<?php

function countList()
{
	if (func_num_args() == 0) {
		return false;
	} else {
		$count = 0;

		for ($i = 0; $i < func_num_args(); $i++) {
			$count += func_get_arg($i);
		}

		return $count;
	}
}

echo countList();

echo "<br><br>";

echo countList(1, 5, 9); // outputs "15"


function getNumArgs(){

	return func_num_args();
}

echo "<br><br>";
echo getNumArgs();
echo "<br><br>";
echo getNumArgs(1,1,1);
echo "<br><br>";
echo getNumArgs('askjdaklsj', 111, 123.33, 'xzcxzc');
echo "<br><br>";


function getArgsArray(){

	return func_get_args();
}

$parametros = getArgsArray();

print_r($parametros);

echo "<br><br>";
$parametros = getArgsArray(1,2,3,4,'asdasd',2233.444444);

print_r($parametros);


















function takesTwo($a, $b)
{
	if (isset($a)) {
		echo " a is set\n";
	}

	if (isset($b)) {
		echo " b is set\n";
	}
}

takesTwo(1, 2);

takesTwo(1);











class Entertainment {}

class Clown extends Entertainment {}

class Job {}

function handleEntertainment(Entertainment $a, callable $callback = NULL)
{
	echo "Handling " . get_class($a) . " fun\n";

	if ($callback !== NULL) {
		$callback();
	}
}

$callback = function()
{
 // do something
};

$palhaco1 = new Clown();

handleEntertainment($palhaco1); // works
handleEntertainment(new Entertainment); // works
handleEntertainment(new Clown, $callback); // works
handleEntertainment(new Entertainment, $callback); // works

handleEntertainment(new Job, $callback); // runtime error






