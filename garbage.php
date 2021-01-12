<?php

$s1 = isset($name); // $s1 is false
$name = null;
echo $s2 = isset($name); // $s2 is true


$name = "Fred";
unset($name); // $name is NULL
