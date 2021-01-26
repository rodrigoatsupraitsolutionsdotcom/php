<?php

/*
	for ($counter = 0; $counter < 10; $counter++) {
		echo "Counter is $counter <br/>";
	}
*/

/*
$total = 0;

for ($i = 0, $j = 1; $i <= 10; $i++, $j++) {
	$total += $j;
}

echo $total;
*/
/*
$meusNumeros = [1,2,3,4,5,6,7,8,9,10];

foreach ($meusNumeros as $numero) {

	echo $numero . '<br>';
}

echo $numero;
*/

/*
$animais = array();
$animais['A'] = 'Gustavo';
$animais['B'] = 'Benji';

foreach ($animais as $x => $y) {
	
	echo 'A chave é: '. $x . ' e o value é ' . $y . ' <BR>';
}

echo 'A chave é: '. $x . ' e o value é ' . $y . ' <BR>';

*/


/*

try {

	$a = 1;
	$b = 0;

	if($b <= 0){
		
		throw new Exception('Mensagem qualquer');
		
	}

	$c = $a / $b;

	echo $c;
	
} catch (Exception $error) {
	
	echo 'Deu problema!' . $error->getMessage();
	
}

*/

/*
function someFunction(){
	echo 'Fui chamada! <BR>';
}

register_tick_function("someFunction");

declare(ticks = 1) {
	echo ++$i . '<BR>';
	echo ++$i . '<BR>';
	echo ++$i . '<BR>';
	echo ++$i . '<BR>';
	echo ++$i . '<BR>';
	echo ++$i . '<BR>';
}



*/

/*
$array = [1,2,3,4,5,6,7,8,9,10];

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

declare(ticks=1);

echo sizeof($array);

*/
/*
function soma ($a, $b) {
	
	exit;
	
	return $a + $b;
}



echo soma(1,2);




*/

for ($i = 0; $i < 10; $i++) {
 // oops, found an error
 echo $i . ' <BR>';
 if ($i == 5) {
	goto cleanup;
 }
}

cleanup:
echo 'Cheguei no cleanup <br>';
echo 'Cheguei no cleanup2 <br>';













