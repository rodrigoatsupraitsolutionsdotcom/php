<?php
	session_start();
	$_SESSION['user'] = null;
	$_SESSION['name'] = null;

	#$_SESSION = array();

	header( "Location: index.php?good=1" );
	exit;
