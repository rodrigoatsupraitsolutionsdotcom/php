<?php

	$mysqli = new mysqli('localhost', 'root', '10qpwo', 'login_system');

	if ($mysqli->connect_errno > 0) {
		echo "Sorry, this website is experiencing problems.<br>";
		echo "Error: Failed to make a MySQL connection, here is why: <br>";
		echo "Errno: " . $mysqli->connect_errno . "<br>";
		echo "Error: " . $mysqli->connect_error . "<br>";
		exit;
	}

	$sql = "SELECT id, name FROM users WHERE name='".$_POST['user']."' AND password=MD5('".$_POST['password']."')";

	if (!$result = $mysqli->query($sql)) {
		header( "Location: index.php?bad=1" );
		exit;
	}else{
		
		if ($result->num_rows == 1) {
		
			$user = $result->fetch_assoc();

			session_start(); 
			$_SESSION['user'] = $user['id']; 
			$_SESSION['name'] = $user['name'];
			header( "Location: welcome.php" );
			exit;
		}else{
			header( "Location: index.php?bad=2" );
			exit;
		}
	}
