<?php
/*
$name = 'nakahoasdfasdfasddo';

switch($name):

 case 'nakahodo':
 case 'ktatroe':
	echo $name . '1<br>';
	break;
 case 'sdfsdfsdf':
	echo $name . '2<br>';
	break;
 case 'ktsdfsdfsdatroe':
	echo $name . '3<br>';
	break;
 case 'dawn':
	echo $name . '4<br>';
	break;
 case 'petermac':
	echo $name . '5<br>';
	break;
 case 'bobk':
	echo $name . '6<br>';
	break;
default:
 print("no");
 break;
 
endswitch;
*/


$array = ['Rodrigo', 'Marcelo', 'Guilherme', 'Gustavo', 'João', 'Pablo'];

/*

for ($i=0;$i < sizeof($array);$i++){
	
	if($array[$i] == 'Guilherme'){
		echo 'Achei o '.$array[$i].' na posição array[' . $i . ']';
	}
	
	
	switch($array[$i]):

	 case 'Rodrigo':
	 case 'Gustavo':
		echo $array[$i] . $i . '<br>';
		break;
	 case 'Pablo':
		echo $array[$i] . $i . '<br>';
		break;
	 
	endswitch;
	
}

*/
/*
	$achei = array_search ( 'Rodrigo' , $array);

	if ($achei === false) {
	
		echo 'Nao achei ninguém';
	}else{

		echo $array[$achei];
	}

*/
/*
$i = 0;
$j = 0;
$contador = 0;

while ($i < 10) {
	echo 'i = ' . $i . '<br>';
	
	while ($j < 10) {
		echo ' >>>>> j = ' . $j . '<br>';
		echo ++$contador . '<br>';
		$j++;
	}
	$i++;
}

//echo "{$i}, {$j}";

*/
/*

$i = 0;
$j = 0;
$z = 0;

while ($z < 10) {
	while ($i < 10) {
		while ($j < 10) {
			if ($j == 5) {
				echo "{$i}, {$j}, {$z} <br>";
				break 1; // breaks out of two while loops
			}

			$j++;
		}
		$i++;
	}
	$z++;
}

*/

$i = 0;
$j = 0;

while ($i < 10) {
	echo 'i = ' . $i . '<br>';
	
	$i++;
	
	while ($j < 10) {
		echo ' >>>>> j = ' . $j . '<br>';
		
		if ($j == 5) {
			continue 2; // continues through two levels
			//break;
		}

		$j++;
	}
}