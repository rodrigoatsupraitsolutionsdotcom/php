<?php
/*
$someValue = function_name( [ parameter, ... ] );


// strlen() is a PHP built-in function that returns the length of a string
$length = strlen("PHP"); // $length is now 3
// sin() and asin() are the sine and arcsine math functions
$result = sin(asin(1)); // $result is the sine of arcsin(1), or 1.0

// unlink() deletes a file
$result = unlink("functions.txt");
// $result = true or false depending on success or failure


$result = unlink("functions.txt") or die("Operation failed!");

*/
/*
function [&] function_name([parameter[, ...]])
{
 statement list
}
*/
/*
function column()
{
 echo '</td><td>';
}

?>


<?php function column()
{ ?>
 </td><td>
<?php } ?>
*/

/*
function strcat($left, $right)
{
 $combinedString = $left . ' ' . $right;

 return $combinedString;
}

$nome_completo = strcat('Rodrigo', 'Nakahodo'); // Rodrigo Nakahodo


function strcat($left, $right)
{
 return $left . ' ' . $right;
}


*/


function pulaLinha() 
{
	print '<BR>';
}

function printarPalavrasJuntas($a, $b)
{
	print $a . ' - ' . $b;
}

#************************************************
/*
$x = "João ";
$y = "Guilherme ";
$z = "Rodrigo ";
$w = "Nakahodo ";

printarPalavrasJuntas($x, $y);
pulaLinha();
pulaLinha();
printarPalavrasJuntas($z, $w);
pulaLinha();
pulaLinha();
printarPalavrasJuntas('Rodrigo ', ' Nakahodo');
pulaLinha();
pulaLinha();
pulaLinha();

echo ucfirst('rodrigo');

pulaLinha();
pulaLinha();


echo strtoupper(str_repeat('bira ', 10));
*/
/*
function nosso_str_repeat($palavra, $quantas_vezes)
{
	
	$palavra_final = '';

	$i = 0;
	
	while($quantas_vezes > $i){
		
		$palavra_final = $palavra_final . $palavra;

		$i++;
	}
	
	return $palavra_final;
}

echo nosso_str_repeat('Pablo', 100);
*/

/*

function outer ($a)
{
	
	if(!function_exists('inner')){
		
		function inner ($b)
		{
			echo " B: $b";
		}
	}

	echo " A: $a";
}

// outputs "well, hello there reader"
outer("well");
inner('inner');
inner('inner');
inner('inner');
outer("well");
inner('inner');
inner('inner');
inner('inner');
outer("well");
inner('inner');
inner('inner');


*/
/*
function foo()
{
	$a += 2;
}
foo();
foo();
$a = 3;
foo();
foo();
echo $a;
*/

/*
function foo($a)
{
	global $a;

	return $a += 2;
}


echo foo();

$a = 3;

echo foo($a);
echo $a;

*/

/*
global $cebolinha;

$cebolinha = & $GLOBALS['cebolinha'];
*/

/*
function counter()
{
	static $count = 0;

	return $count++;
}

print counter();
print counter();
print counter();
print counter();
print counter();

*/
/*
function fazAlgumaCoisa(&$a, $b, &$c) {
	
	global $z;
	
	$a = strtoupper($a);
}

$nome = 'Rodrigo Nakahodo';

print $nome;

fazAlgumaCoisa($nome);

pulaLinha();
pulaLinha();

print $nome;

*/

function fazOutraCoisa($a = '239874928748923'){

		print $a;
}

$x = 'Rodrigo';

fazOutraCoisa($x);
fazOutraCoisa();






