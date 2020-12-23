<?php

/*
	$what = "Fred";
	$what = 35;
	$what = array("Fred", 35, "Wilma");
	
	$day = null;
	//$day = 60 * 60 * 24;
	//echo "There are {$day} seconds in a day.";
	
	
	if ($day === NULL) {
		echo "Yes!";
	} else {
		echo "No!";
	}
	
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	$a = "guilherme";
	
	$guilherme = "10";
	
	echo $guilherme;
	echo "<br>";
	echo $a;
	echo "<br>";
	echo $$a;
	
	
	
*/

/*
	$cor = "branco";

	$corAtual =& $cor;
	
	$cor = "azul";
	
	$corAtual = "roxo";
	
	echo $cor;
	echo "<br>";
	echo $corAtual;
	
	echo "<br>";
	
	unset($corAtual);
	
	$corAtual = "novo valor";
	
	echo $cor;
	echo "<br>";
	echo $corAtual;
	
	
*/
/*
function &retRef()
{
	if(!isset($var)){
		$var = "valor inicial";
	}

	return $var;
}

$php  =& retRef();
$java =& retRef();
	
echo $php;
echo "<br>";
echo $java;
echo "<br>";

$php = "VALOR NOVO DO PHP";
$nova =& retRef();

echo $php;
echo "<br>";
echo $nova;
echo "<br>";

*/
/*
$valor = "valor de fora <br>";

function imprimir()
{
	
	$valor = "valor de dentro <br>";
	
	echo $valor;
}

imprimir();


echo $valor;
*/

/*
function updateCounter(&$a)
{
	$a = $a + 1;
	
	return $a;
}

$counter = 10;

echo updateCounter($counter);

echo "<br>";

echo $counter;


*/

/*
function updateCounter()
{
	
	 # global $counter;
	 # $counter = $counter + 1;
	
	 
	 $GLOBALS['counter'] = $GLOBALS['counter'] + 1;
}

$counter = 10;
updateCounter();
echo $counter;

*/


function updateCounter()
{
	static $counter = 0;
	$counter++;

	echo "Static counter is now {$counter}<br/>";
}

$counter = 10;
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();
updateCounter();

echo "Global counter is {$counter}";





