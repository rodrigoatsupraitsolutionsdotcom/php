<?php


$res = database_connect(); // fictitious database connect function
database_query($res);

$res = null;
$res = "boo";
$res = 0;
// database connection automatically closed because $res is redefined




